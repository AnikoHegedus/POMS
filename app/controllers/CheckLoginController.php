<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginController extends BaseController {

public function checkLogin()
{
    $email = Input::get('email');
    $password = Input::get('password');

    if ($email && $password) {
        $loggedin_user = DB::select('SELECT * FROM aniko_hegedus_users WHERE email = ' . '"' . $email . '" AND password = ' . '"' . $password . '"');
        if ($email == $loggedin_user[0]->email && $password == $loggedin_user[0]->password){
            if($loggedin_user[0]->admin == 0){
                $mytime = Carbon\Carbon::now()->toDateTimeString();
                DB::table('aniko_hegedus_users') ->where('id', $loggedin_user[0]->id)->update(['last_login' => $mytime]);
                return View::make('loggedinUser') ->with(['user'=>$user, 'loggedin_user' => $loggedin_user[0], "mytime" => $mytime]);
            }else if ($loggedin_user[0]->admin == 1){
                $all_users = DB::select('SELECT * FROM aniko_hegedus_users');
                return View::make('loggedinAdmin') -> with(['all_users' => $all_users, 'loggedin_user' => $loggedin_user[0]]);
            }
        } else {
            print_r($email);
        }
    } else {
        $no_login_or_password = '';
        return View::make('login') ->with(['no_login_or_password' => $no_login_or_password]);
    }
}

public function pickUser($userId){
    $userToEdit = DB::table('aniko_hegedus_users') ->where('id', $userId)->get();
    return View::make('loggedinAdmin') -> with(['userToEdit' => $userToEdit[0]]);
            
}

public function editUser($userId){
    $username = Input::get('username');
    $email = Input::get('email');
    $password = Input::get('password');
    $admin = Input::get('admin');
    DB::table('aniko_hegedus_users') ->where('id', $userId)->update(['username' => $username, 'email' => $email, 'password' => $password, 'admin' => $admin]);
    $all_users = DB::select('SELECT * FROM aniko_hegedus_users');
    return View::make('loggedinAdmin') -> with(['all_users' => $all_users]);           
}
}