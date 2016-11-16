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

Route::group(['prefix' => '/api'], function () {

    // for auth
    Route::post('auth/register', 'Auth\AuthController@register');

    Route::get('auth/login', 'Auth\LoginController@login');
    Route::get('auth/login/google', 'Auth\LoginController@login');
    Route::get('auth/login/twitter', 'Auth\LoginController@login');

    Route::get('auth/logout', 'Auth\AuthController@logout');

    Route::get('auth/fb/oauth2callback', 'Auth\AuthController@facebookOauth2Callback');
    Route::get('auth/tw/oauth2callback', 'Auth\AuthController@twitterOauthCallback');

    Route::group(['prefix' => '/v1'], function () {

    })->middleware('auth:api');

});
