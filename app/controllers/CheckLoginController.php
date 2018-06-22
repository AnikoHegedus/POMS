<?php
use Illuminate\Http\Request;

class CheckLoginController extends BaseController {

public function checkLogin()
{
    $email = Input::get('email');
    $password = Input::get('password');
    
    if ($email && $password) {
        $loggedin_user = DB::select('SELECT * FROM aniko_hegedus_users WHERE email = ' . '"' . $email . '" AND password = ' . '"' . $password . '"');
        if ($email == $loggedin_user->email && $password == $loggedin_user->password){
            return View::make('login') ->with(['loggedin_user' => $loggedin_user]);
        } else {
            print_r("wrong login");
        }
    } else {
        $no_login_or_password = '';
        return View::make('login') ->with(['no_login_or_password' => $no_login_or_password]);
    }
}
}