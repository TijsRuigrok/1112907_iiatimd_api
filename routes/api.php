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

Route::post('/login', [
    'as'    =>  'login.login',
    'uses'  =>  'Api\Auth\LoginController@login'
]);

Route::post('/register', [
    'as'    =>  'login.register',
    'uses'  =>  'Api\Auth\LoginController@register'
]);

Route::get('/refresh', [
    'as'    => 'login.refresh',
    'uses'  =>  'Api\Auth\LoginController@refresh'
]);

Route::put('/set-update-timestamp', [
    'as'    => 'user.set-update-timestamp',
    'uses'  =>  'Api\UserController@setUpdateTimestamp'
]);

Route::get('/get-update-timestamp', [
    'as'    => 'user.get-update-timestamp',
    'uses'  =>  'Api\UserController@getUpdateTimestamp'
]);

Route::put('/set-points', [
    'as'    => 'user.set-points',
    'uses'  =>  'Api\UserController@setPoints'
]);

Route::get('/get-points', [
    'as'    => 'user.get-points',
    'uses'  =>  'Api\UserController@getPoints'
]);

Route::get('/chores/self', [
    'as'    =>  'chores.self',
    'uses'  =>  'Api\ChoreController@self'
]);

Route::post('/chores/create', [
    'as'    =>  'chores.store',
    'uses'  =>  'Api\ChoreController@store'
]);

Route::delete('/chores/self/delete/{id}', [
    'as'    => 'chores.remove',
    'uses'  =>  'Api\ChoreController@remove'
]);

Route::get('/chores/self/complete/{id}', [
    'as'    => 'chores.complete',
    'uses'  =>  'Api\ChoreController@complete'
]);

Route::get('/prizes/self', [
    'as'    => 'prizes.self',
    'uses'  =>  'Api\PrizeController@self'
]);

Route::post('/prizes/create', [
    'as'    => 'prizes.store',
    'uses'  =>  'Api\PrizeController@store'
]);

Route::delete('/prizes/self/delete/{id}', [
    'as'    => 'prizes.remove',
    'uses'  =>  'Api\PrizeController@remove'
]);

Route::get('/prizes/self/claim/{id}', [
    'as'    => 'prizes.claim',
    'uses'  =>  'Api\PrizeController@claim'
]);