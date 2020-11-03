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

Route::get('index/', function () {
    return view('index');
});

Route::get('login/', function () {
    return view('login');
});

Route::get('allpost/', function ($list = array()) {
    return view('allpost', ['list' => $list]);
});



Route::get('addpost/', function () {
    return view('addpost');
});

Route::get('alltag/', function () {
    return view('alltag');
});

Route::get('editpost/', function () {
    return view('editpost');
});

Route::get('addtag', function () {
    return view('addtag');
});

Route::get('allmemacc', function () {
    return view('allmemacc');
});