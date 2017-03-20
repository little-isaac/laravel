<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Request;
use App\business;
use App\customer;
use Input;
use Validator;
use Hash;

class BusinessController extends Controller {

    public function register() {
        $data = Input::all();
        $rule = array(
            "customer_id" => "required|integer|exists:customers,id",
            "business_name" => "required|max:255",
            "contact_no" => "required|max:11",
            "business_email" => "required|max:255|email",
            "zipcode" => "required|max:10",
            "no_of_physical_locations" => "required|max:255",
            "category" => "required|integer|exists:category,id",
        );
        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            return array(
                "success" => false,
                "errors" => $validator->errors()->first()
            );
        } else {
            $business = new business();
            $business->uuid = uniqid();
            $business->customer_id = Request::input('customer_id');
            $business->name = Request::input('business_name');
            $business->contact_no = Request::input('contact_no');
            $business->email = Request::input('business_email');
            $business->zipcode = Request::input('zipcode');
            $business->no_of_physical_locations = Request::input('no_of_physical_locations');
            $business->category = Request::input('category');
            $business->isApproved = false;
            $business->save();
            return array(
                "success" => true,
                "business" => $business
            );
        }
    }

    public function register_customer() {
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
        );
        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            return array(
                "success" => false,
                "errors" => $validator->errors()->first()
            );
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
            $business->save();

            return array(
                "success" => true,
                "customer" => $customer,
                "business" => $business
            );
        }
    }

}
