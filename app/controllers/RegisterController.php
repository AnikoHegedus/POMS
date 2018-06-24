<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends BaseController {

    public function registerNew()
    {
        $username = Input::get('username');
        $email = Input::get('email');
        $password_1 = Input::get('password');
        $password_2 = Input::get('repeatPassword');
        $admin = '0';

        if($password_1 !== $password_2) {
            $pwError = '';
            return View::make('register')->with(['pwError' => $pwError]);
        } else {
            $password = Hash::make('password');
            $now = Carbon\Carbon::now()->toDateTimeString();
            DB::insert('INSERT INTO aniko_hegedus_users (username, email, password, admin, registered, last_login) values (?, ?, ?, ?, ?, ?)', array($username, $email, $password, $admin, $now, $now));
            return View::make('register')->with(['username' => $username]);
        }
    }
}