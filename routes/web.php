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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/',"UserController@store")->name('welcome');

Route::get('/regular',"UserController@regular")->name('regular');
Route::get('/parallel',"UserController@parallel")->name('parallel');
