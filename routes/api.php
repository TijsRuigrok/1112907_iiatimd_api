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

Route::get('/prizes/self', [
    'as'    => 'prizes.self',
    'uses'  =>  'Api\PrizeController@self'
]);

Route::post('/prizes/create', [
    'as'    => 'prizes.store',
    'uses'  =>  'Api\PrizeController@store'
]);

Route::get('/prizes/self/claimed', [
    'as'    => 'prizes.claimed',
    'uses'  =>  'Api\PrizeController@claimed'
]);

Route::delete('/prizes/self/delete/{id}', [
    'as'    => 'prizes.remove',
    'uses'  =>  'Api\PrizeController@remove'
]);