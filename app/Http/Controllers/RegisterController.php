<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;

class RegisterController extends Controller {

    public function get() {
        return view('pages.register');
    }

    public function post() {
        $data = Input::except(array('_token'));
        $rule = array(
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'confirm_password' => 'required|same:password'
        );
        $mesgs = array(
            'confirm_password.required' => 'The Confirm passsword is required',
            'confirm_password.min' => 'The Confirm passsword must be atleast 3 chars',
            'confirm_password.same' => 'The Confirm passsword must be same as password',
            'password.required' => 'The passsword is required',
            'password.min' => 'The passsword must be atleast 3 chars',
            'email.required' => 'The Email is required',
            'email.email' => 'The Email must be valid email',
            'name.required' => 'The Name is required',
        );
        $validator = Validator::make($data, $rule, $mesgs);
        if ($validator->fails()) {
            return Redirect::to('/register')->withErrors($validator);
        } else {
            Register::newRegister(Input::except(array('_token','confirm_password')));
            return Redirect::to('/register')->with('success','Successfully Registered');
        }
    }

}
