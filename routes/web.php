<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ModuleController@index')->name('modules');
Route::resource('module', 'ModuleController', ['except' => [
    'index'
]]);

// TODO: Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
