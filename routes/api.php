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
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('closed', 'DataController@closed');
    Route::match(['get', 'post'], '/logout', 'UserController@logout');
    Route::match(['get', 'post'], '/refresh', 'UserController@refresh');
    Route::match(['get', 'post'], '/me', 'UserController@me');
});
