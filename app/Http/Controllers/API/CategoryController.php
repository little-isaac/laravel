<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\category;
use Request;
use Validator;

class CategoryController extends Controller {

    public function get_all() {
//        return array("success"=>true);
        $category = category::all();
        if ($category) {
            return array(
                "success" => true,
                "categroies" => $category
            );
        } else {
            return array(
                "success" => false,
                "error" => "Not Found"
            );
        }
    }

    public function get($id = 0) {
        $data = array('id' => $id);
        $rule = array(
            'id' => 'required|integer',
        );
        $mesgs = array(
            'id.integer' => 'Please provide valid id',
        );
        $validator = Validator::make($data, $rule, $mesgs);
        if ($validator->fails()) {
            return array("success" => false,
                "errors" => $validator->errors()
            );
        } else {
            $category = category::find($id);
            if ($category) {
                return array(
                    "success" => true,
                    "category" => $category
                );
            }
            return array(
                "success" => false,
                "error" => "Not Found"
            );
        }
    }

    public function add() {
        $data = array('name' => Request::input('name'));
        $rule = array(
            'name' => 'required|unique:category,name',
        );
        $msgs = array(
            "name.unique" => "Category Already exists"
        );
        $validator = Validator::make($data, $rule, $msgs);
        if ($validator->fails()) {
            return array("success" => false,
                "errors" => $validator->errors()
            );
        } else {
            $name = Request::input('name');
            $category = category::create(['name' => $name]);
            return array(
                "success" => true,
                "category" => $category
            );
        }
    }

}
