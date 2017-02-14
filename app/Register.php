<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class Register extends Authenticatable {

    //
    public static function newRegister($data) {
        $register = new Register();
        $register->name = $data['name'];
        $register->email = $data['email'];
        $register->password = Hash::make($data['password']);
        $register->save();
    }

    

}
