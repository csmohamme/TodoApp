<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('/todo', 'TodoController');
Route::put('/todo/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::delete('/todo/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');

Route::get('/', function () {
    return view('welcome');
});
Route::post('/uplode', 'UserController@uplodeImage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');