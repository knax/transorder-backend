<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix' => 'product'], function () {
    Route::get('', ['uses' => 'ProductController@index', 'as' => 'product.list']);
    Route::get('{id}', ['uses' => 'ProductController@detail', 'as' => 'product.detail']);
});

Route::group(['prefix' => 'order'], function () {
   Route::post('product', ['uses' => 'OrderController@order', 'as' => 'order.product']);
});

Route::get('login', ['uses' => 'AuthController@loginForm', 'as' => 'auth.login.form']);
Route::post('login', ['uses' => 'AuthController@login', 'as' => 'auth.login']);
Route::get('register', ['uses' => 'AuthController@registerForm', 'as' => 'auth.register.form']);
Route::post('register', ['uses' => 'AuthController@register', 'as' => 'auth.register']);