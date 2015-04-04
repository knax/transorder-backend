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
// API Routes

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::group(['prefix' => 'authentication'], function () {
            Route::post('login', 'Api\V1\Authentication@login');
            Route::get('user', 'Api\V1\User@user');
        });
        Route::resource('product', 'Api\V1\Product');
    });
});
