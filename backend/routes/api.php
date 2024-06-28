<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::post('login', 'App\Http\Controllers\Api\LoginController@login');
Route::post('register', 'App\Http\Controllers\Api\LoginController@register');
Route::get('/tasks', 'App\Http\Controllers\Api\TaskController@index');
Route::post('/tasks', 'App\Http\Controllers\Api\TaskController@store');
Route::put('/tasks/{task}', 'App\Http\Controllers\Api\TaskController@update');
Route::delete('/tasks/{task}', 'App\Http\Controllers\Api\TaskController@destroy');
