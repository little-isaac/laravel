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

Route::get('/image', function () {//merchant signup
    try {
        $categories = array("food",'gym','health','hotel','movie','salon');
        $image_path = "images/category/";
        foreach ($categories as $category) {
            $image_path_save = $image_path . $category;
            File::makeDirectory($image_path_save,0777,true,true);
            $img = null;
            $img = Image::make($image_path . "$category.jpg");
            $img->save($image_path_save."/1000_$category.png");
            $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($image_path_save."/600_$category.png");
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($image_path_save."/300_$category.png");
            $img->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($image_path_save."/150_$category.png");
            
        }
        return $img->response('png');
    } catch (Exception $ex) {
        return $ex->getMessage();
    }
});
Route::get('/', function () {//merchant signup
    return redirect('/list-your-business');
});
Route::get('/list-your-business', 'ListBusinessController@get');
Route::post('/list-your-business', 'ListBusinessController@registerWithNewCustomer');

Route::group(['prefix' => 'admin', 'namespace' => "Admin"], function () {           // admin routes
    Route::get('/', function () {                   //register
        return redirect('admin/dashboard');
    });
    Route::get('login', 'LoginController@get_login');
    Route::post('login', 'LoginController@post_login');
    Route::group(['middleware' => 'AdminMiddleware'], function() {
        Route::get('dashboard', function () {               //dashboard
            return view('pages.admin.dashboard');
        });
        Route::get('category', function () {               //dashboard
            return view('pages.admin.category');
        });
    });
});
Route::group(['prefix' => 'customer', 'namespace' => "Customer"], function () {        // customer or merchant routes 
    Route::get('/', function () {                   //register
        return redirect('customer/dashboard');
    });
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
