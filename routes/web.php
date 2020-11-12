<?php

use Illuminate\Support\Facades\Route;

Route::get('/todos', 'TodoController@index')->name('todos.index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');
Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
Route::delete('/todos/{todo}/delete', 'TodoController@destroy')->name('todo.destroy');

Route::get('/', function () {
    return view('welcome');
});