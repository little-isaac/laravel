<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Auth;
use App\Register;
class LoginController extends Controller {

    public function get() {
        return view('pages.login');
    }

    public function post() {
        $data = Input::except(array("_token"));
        $rule = array(
            'email' => 'required|email',
        );
//        $validator = Validator::make($data, $rule, $mesgs);
        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            return Redirect::to('/login')->withErrors($validator);
        } else {
            $register = Register::where('email', '=', Input::get('email'))->first();
            if( $register == null ){
                 return Redirect::to('/login')->with('login_error','Not Found');
            }
            else{
                Auth::guard('admin')->login($register);
                return Redirect::to('/home')->with('login_success','Successfully Login');
            }
            
//            Register::newRegister(Input::except(array('_token', 'confirm_password')));
//            return Redirect::to('/register')->with('success', 'Successfully Registered');
        }
    }

}
