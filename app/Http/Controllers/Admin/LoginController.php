<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;
use Auth;

class LoginController extends Controller {

    function get_login() {
        return view('pages.admin.login');
    }

    function post_login() {
        $email = Request::input('email');
        $password = Request::input('password');
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('admin/dashboard');
        }
        else{
            return redirect('admin/login')->with('error','Invalid Email or password');
        }
        
    }

}
