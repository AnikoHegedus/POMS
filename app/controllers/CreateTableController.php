<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateTableController extends BaseController {

    public function createTable()
    {
        $username = Input::get('username');
        $email = Input::get('email');
        $password_1 = Input::get('password');
        $password_2 = Input::get('repeatPassword');
        $admin = '1';

        if($password_1 !== $password_2) {
            $pwError = '';
            return View::make('install')->with(['pwError' => $pwError]);
        } else {
            $password = Hash::make('password');
            $now = Carbon\Carbon::now()->toDateTimeString();
            DB::insert('INSERT INTO aniko_hegedus_users (username, email, password, admin, registered, last_login) values (?, ?, ?, ?, ?, ?)', array($username, $email, $password, $admin, $now, $now));
            $all_users = DB::select('SELECT * FROM aniko_hegedus_users');
            return View::make('loggedinAdmin') -> with(['all_users' => $all_users, 'loggedin_user' => $username]);
        
        }
    }
}