<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/todos', 'TodoController');
Route::get('/', function () {
    return view('welcome');
});
Route::post('/uplode', 'UserController@uplodeImage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');