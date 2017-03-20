<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {//merchant signup
    return redirect('/list-your-business');
});
Route::get('/list-your-business', 'ListBusinessController@get');
Route::post('/list-your-business', 'ListBusinessController@registerWithNewCustomer');

Route::group(['prefix' => 'admin'], function () {           // admin routes
    Route::get('login', function () {                   //login
        return view('pages.admin.login');
    });

    Route::get('dashboard', function () {               // dashboard
        return view('pages.admin.dashboard');
    });
});
Route::group(['prefix' => 'customer','namespace'=>"Customer"], function () {        // customer or merchant routes 
    Route::get('register', function () {                   //register
        return view('pages.customer.register');
    });
    Route::get('login', 'LoginController@get_login');
    Route::post('login', 'LoginController@post_login');
//    Route::get('logout', 'LoginController@get_logout');
    Route::group(['middleware' => 'CustomerMiddleware'], function() {
        Route::get('dashboard', function () {               //dashboard
            return view('pages.customer.dashboard');
        });
    });
});
