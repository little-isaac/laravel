<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function index() {
        return array(
            "User" => "Milind",
            "Id" => 1
        );
    }

}
