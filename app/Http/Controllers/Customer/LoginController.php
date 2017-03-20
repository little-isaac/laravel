<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Request;
use Auth;

class LoginController extends Controller {

    function get_login() {
        return view('pages.customer.login');
    }

    function post_login() {
        $email = Request::input('email');
        $password = Request::input('password');
        if (Auth::guard('customer')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('customer/dashboard');
        }
        else{
            return redirect('customer/login')->with('error','Invalid Email or password');
        }
        
    }

}
