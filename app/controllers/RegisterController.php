<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends BaseController {

    public function registerForm()
    {
        return View::make('register');
    }

    public function registerNew()
    {
        return View::make('register');
    }
}