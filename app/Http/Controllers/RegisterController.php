<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Register\RegisterContract;
use Illuminate\Database\QueryException;
use Sentinel;

class RegisterController extends Controller
{
	protected $repo;
	public function __construct(RegisterContract $registerContract) {
		$this->repo = $registerContract;
	}
	
	public function register() {
		return view('auth.register');
	}

	public function store(Request $request) {
    $this->validate($request, [
      'full_name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'confirm_password' => 'required'
    ]);

    try {
      $user = $this->repo->create($request);
      // dd($user);
      if ($user->id) {
        return redirect()->back()->with('success', 'Please check your email for activation link');
      } 
      else {
        return back()->withInput()->with('error', 'Could not create Your account. Try again!');
      }
    } 
    catch (QueryException $e) {
      $errorCode = $e->errorInfo[1];
      if($errorCode == 1062){
        return back()->withInput()->with('error', 'OPS... An account with '.$request->email.' already exists!');
      }
    }
  }
}
