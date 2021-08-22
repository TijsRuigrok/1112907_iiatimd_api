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


// USER ----------------------------------------------------------

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


// CHORES ------------------------------------------------------------

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


// PRIZES ------------------------------------------------------------

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


// FALLBACK

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact s1112907@student.hsleiden.nl'], 404);
});