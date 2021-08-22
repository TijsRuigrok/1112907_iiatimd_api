<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// USERS ------------------------------------------------------------

Route::get('/users/self/points', [
    'uses'  =>  'Api\UserController@getPoints'
]);

Route::put('/users/self/points', [
    'uses'  =>  'Api\UserController@editPoints'
]);

Route::get('/users/self/updated-at', [
    'uses'  =>  'Api\UserController@getUpdatedAt'
]);

Route::put('/users/self/updated-at', [
    'uses'  =>  'Api\UserController@editUpdatedAt'
]);



// CHORES ------------------------------------------------------------

Route::get('/chores/self', [
    'uses'  =>  'Api\ChoreController@self'
]);

Route::post('/chores', [
    'uses'  =>  'Api\ChoreController@store'
]);

Route::delete('/chores/{guid}', [
    'uses'  =>  'Api\ChoreController@remove'
]);

Route::put('/chores/{guid}/completed', [
    'uses'  =>  'Api\ChoreController@editCompleted'
]);


// PRIZES ------------------------------------------------------------

Route::get('/prizes/self', [
    'uses'  =>  'Api\PrizeController@self'
]);

Route::post('/prizes', [
    'uses'  =>  'Api\PrizeController@store'
]);

Route::delete('/prizes/{guid}', [
    'uses'  =>  'Api\PrizeController@remove'
]);

Route::put('/prizes/{guid}/claimed', [
    'uses'  =>  'Api\PrizeController@editClaimed'
]);


// FALLBACK

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact s1112907@student.hsleiden.nl'], 404);
});