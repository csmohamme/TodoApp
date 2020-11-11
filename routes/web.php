<?php

use Illuminate\Support\Facades\Route;

Route::get('/todos', 'TodoController@index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/edit', 'TodoController@edit');

Route::get('/', function () {
    return view('welcome');
});