<?php
namespace App\Repositories\Register;
use App\Repositories\Register\RegisterContract;
use Sentinel;
use Activation;
use App\User;
use Mail;

class EloquentRegisterRepository implements RegisterContract {
  
  public function create($request) {

    $name_slug = preg_replace('/\s+/', '-', $request->full_name);
    $name = explode(" ", $request->full_name);

    $credentials = [
      'first_name' => $name[0],
      'last_name' => $name[1],
      'email'    => $request->email,
      'password' => $request->password,
      'slug' => strtolower($name_slug.'-'.rand()),
      'user_type' => $request->user_type,
      'sharable_link' => env('APP_URL').'/shared/my/wishlist',
    ];

    $user = Sentinel::registerAndActivate($credentials);
    $role = Sentinel::findRoleBySlug($credentials['user_type']);
    $role->users()->attach($user);
    return $user;    
  }

  private function sendEmail($user, $code) {
    try {
      Mail::send('emails.activation', [
          'user' => $user,
          'code' => $code
      ], function($message) use ($user) {
          $message->to($user->email);
          $message->subject("Hello $user->first_name, activate your account.");
      });
    } 
    catch (\Swift_TransportException $e) {
      dd($e);
    }
      
  }
}
