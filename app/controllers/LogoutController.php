<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends BaseController {

    public function logout()
    {
        /* session_start();
        unset($_SESSION["userid"]);
        return View::make('home'); */
        Auth::logout();
        /* Auth::logoutOtherDevices($password); */
        /* Session::flush(); */
	    return View::make('home');
    }
}