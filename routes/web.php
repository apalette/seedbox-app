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
    return view('index');
});

Route::get('/newfile', function () {
    return view('newfile');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/users/edit/{id}', function () {
    return view('users-edit');
})->where('id', '[0-9]+');
