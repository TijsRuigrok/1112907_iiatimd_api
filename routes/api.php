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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [
    'as'    =>  'login.login',
    'uses'  =>  'Api\Auth\LoginController@login'
]);

Route::get('/chores/self', [
    'as'    =>  'chores.self',
    'uses'  =>  'Api\ChoreController@self'
]);

Route::post('/chores/create', [
    'as'    =>  'chores.store',
    'uses'  =>  'Api\ChoreController@store'
]);

Route::get('/refresh', [
    'as'    => 'login.refresh',
    'uses'  =>  'Api\Auth\LoginController@refresh'
]);