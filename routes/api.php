<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => 'api'
], function($router){
    /*
    |--------------------------------------------------------------------------
    | Authentication Routes - login, forgot password && change password
    |--------------------------------------------------------------------------
    | The routes address login, forgot and change password
    |
    */
    Route::post('login', ['App\Http\Controllers\Auth\JWTController', 'login']); 
    Route::post('forgot_password', ['App\Http\Controllers\Auth\JWTController','forgotPassword']);
    Route::post('change_password/{$link}', ['App\Http\Controllers\Auth\JWTController','changePassword']);
    Route::get('refresh', ['App\Http\Controllers\Auth\JWTController', 'refreshToken']); 
    Route::get('logout', ['App\Http\Controllers\Auth\JWTController', 'logout']);
});

Route::group(['middleware' => 'auth:api', 'as' => 'auth'], function ()
{
    /*
    |--------------------------------------------------------------------------
    | Authentication Routes - refresh, logout
    |--------------------------------------------------------------------------
    | The routes address refreshing access token and user log out
    |
    */
    Route::get('refresh', ['App\Http\Controllers\Auth\JWTController', 'refreshToken']); 
    Route::get('logout', ['App\Http\Controllers\Auth\JWTController', 'logout']); 
});
