<?php

namespace App\Http\Controllers;

use Input;
use Request;
use Hash;
use Validator;
use Redirect;
use Auth;
use App\category;
use App\business;
use App\customer;

class ListBusinessController extends Controller {

    public function get() {
        return view('pages.front.list_your_business')->with([
            'category'=>$this->getCategory()
        ]);
    }

    public function registerWithNewCustomer() {
        $data = Input::all();
        $rule = array(
            "first_name" => "required|max:255",
            "last_name" => "required|max:255",
            "email" => "required|max:255|email|unique:customers,email",
            "password" => "required|max:255|min:6",
            "confirm_password" => "required|same:password",
            "business_name" => "required|max:255",
            "contact_no" => "required|max:255",
            "business_email" => "required|max:255|email",
            "zipcode" => "required|max:255",
            "no_of_physical_locations" => "required|max:255",
            "category" => "required|integer|exists:category,id",
            "isFirm" => "required|boolean",
            "account_holder_name" => "string|nullable|max:255",
            "bank_name" => "string|nullable|max:255",
            "branch_name" => "string|nullable|max:255",
            "account_number" => "nullable|max:255",
            "ifsc_code" => "string|nullable|max:255",
            "bank_location" => "string|nullable|max:255"
        );
        $msgs = array(
            "category.integer" => "Category must be valid."
        );
        $validator = Validator::make($data, $rule, $msgs);
        if ($validator->fails()) {
            return Redirect::to('/list-your-business')->withErrors($validator);
        } else {
            $business = new business();
            $customer = new customer();

            $customer->uuid = uniqid();
            $customer->first_name = Request::input('first_name');
            $customer->last_name = Request::input('last_name');
            $customer->email = Request::input('email');
            $customer->password = Hash::make(Request::input('password'));
            $customer->isRegisteredForBussiness = true;
            $customer->save();

            $business->uuid = uniqid();
            $business->customer_id = $customer->id;
            $business->name = Request::input('business_name');
            $business->contact_no = Request::input('contact_no');
            $business->email = Request::input('business_email');
            $business->zipcode = Request::input('zipcode');
            $business->no_of_physical_locations = Request::input('no_of_physical_locations');
            $business->category = Request::input('category');
            $business->isApproved = false;
            $business->isFirm = Request::input('isFirm');
            $business->account_holder_name = Request::input('account_holder_name');
            $business->bank_name = Request::input('bank_name');
            $business->branch_name = Request::input('branch_name');
            $business->account_number = Request::input('account_number');
            $business->ifsc_code = Request::input('ifsc_code');
            $business->bank_location = Request::input('bank_location');
            $business->save();

            return Redirect::to('/list-your-business')->with('success', 'Successfully Registered');
        }
    }

    function getCategory() {
        $category = category::all();
        foreach($category as $i=>$cate){
            $category[$i]->image = json_decode($cate->image,true);
        }
        return $category;
    }
}
