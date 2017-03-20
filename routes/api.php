<?php

use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['prefix' => '/v1'], function ($api) {

        $api->group(['prefix' => '/business'], function ($api) {
            $api->post('/new_customer', 'App\\Http\\Controllers\\API\\BusinessController@register_customer');
            $api->post('', 'App\\Http\\Controllers\\API\\BusinessController@register');
        });
        $api->group(['prefix' => '/category'], function ($api) {
            $api->post('', 'App\\Http\\Controllers\\API\\CategoryController@add');
            $api->get('/all', 'App\\Http\\Controllers\\API\\CategoryController@get_all');
            $api->get('{id?}', 'App\\Http\\Controllers\\API\\CategoryController@get');
        });
    });
});
