<?php

use Illuminate\Support\Facades\Route;

Route::get('/todos', 'TodoController@index')->name('todos.index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

Route::get('/', function () {
    return view('welcome');
});