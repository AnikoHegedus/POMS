<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginController extends BaseController {

public function checkLogin()
{
    $email = Input::get('email');
    $password = Input::get('password');
    $no_login_or_password = false;
    // email and pw provided
    if ($email && $password) {
        //find user
       $loggedin_user = DB::select('SELECT * FROM aniko_hegedus_users WHERE email = ' . '"' . $email . '"'); 
        // user not found in db
        if($loggedin_user == []) {
            $no_login_or_password = true;
        }
        //email and pw correct
        if (Hash::check('password', $loggedin_user[0]->password)){
            //if admin
            if($loggedin_user[0]->admin == 0){
                $mytime = Carbon\Carbon::now()->toDateTimeString();
                DB::table('aniko_hegedus_users') ->where('id', $loggedin_user[0]->id)->update(['last_login' => $mytime]);
                return View::make('loggedinUser') ->with(['loggedin_user' => $loggedin_user[0], "mytime" => $mytime]);
            // if normal user
            }else if ($loggedin_user[0]->admin == 1){
                $all_users = DB::select('SELECT * FROM aniko_hegedus_users');
                return View::make('loggedinAdmin') -> with(['all_users' => $all_users, 'loggedin_user' => $loggedin_user[0]]);
            }
        //email and pw not correct
        } else {
            $no_login_or_password = true;
        }
    // either email or pw not inserted
    } else {
        $no_login_or_password = true;
    }

    if($no_login_or_password) {
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