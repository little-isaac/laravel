<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\category;
use Request;
use Validator;
use URL;
class CategoryController extends Controller {

    public function get_all() {
//        return array("success"=>true);
        $category = category::all();
        $category_ = array();
        foreach($category as $i=>$cate){
            $category[$i]->image = json_decode($cate->image,true);
            $category_[]= json_decode(json_encode($category[$i]),true);
        }
        foreach($category_ as $i=>$cate){
            foreach($cate['image'] as $j=>$images){
                $category_[$i]['image'][$j] = URL::asset("images/category/".$cate['id']."/".$images);
            }
        }
        if ($category) {
            return array(
                "success" => true,
                "categroies" => $category_
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
            $category_ = array();
            $category->image = json_decode($category->image,true);
            $category_ = json_decode(json_encode($category),true);
            foreach($category_['image'] as $j=>$images){
                $category_['image'][$j] =  URL::asset("images/category/".$category_['id']."/".$images);
            }
            if ($category) {
                return array(
                    "success" => true,
                    "category" => $category_
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
