<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    
    $adminCredentials = [
      'first_name' => 'Admin',
      'last_name' => 'Admin',
      'phone_number' => '1234567890',
      'email' => 'admin@registry.com',
      'address' => 'Jos',
      'password' => 'secret',
      'slug' => 'admin12345',
      'bio_status' => 1,
      'user_type' => 'admin',
      'sharable_link' => env('APP_URL').'/shared/my/wishlist'
    ];
    
    $admin = Sentinel::registerAndActivate($adminCredentials, true);
    $role = Sentinel::findRoleBySlug('admin');
    $role->users()->attach($admin);
    
    $userCredentials = [
      'first_name' => 'Nani',
      'last_name' => 'Registry',
      'phone_number' => '1234567890',
      'email' => 'user@registry.com',
      'address' => 'Jos',
      'password' => 'secret',
      'slug' => 'nani-reg12345',
      'bio_status' => 1,
      'user_type' => 'registry',
      'sharable_link' => env('APP_URL').'/shared/my/wishlist'
    ];
    
    $user = Sentinel::registerAndActivate($userCredentials, true);
    $role = Sentinel::findRoleBySlug('registry');
    $role->users()->attach($user);

    $userCredentials = [
      'first_name' => 'Nani',
      'last_name' => 'User',
      'phone_number' => '1234567890',
      'email' => 'user1@registry.com',
      'address' => 'Jos',
      'password' => 'secret',
      'slug' => 'nani-user12345',
      'bio_status' => 1,
      'user_type' => 'member',
      'sharable_link' => env('APP_URL').'/shared/my/wishlist'
    ];
    
    $user = Sentinel::registerAndActivate($userCredentials, true);
    $role = Sentinel::findRoleBySlug('member');
    $role->users()->attach($user);
  }
}
