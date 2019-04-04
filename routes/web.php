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
    return view('home');
});


Route::get('/contact', function() {
	return view('contact');
});

Route::get('/students', function() {
	return view('students');
});

Route::get('/none', function() {
	return view('none');
});

Route::get('/note', function() {
	return view('note');
});

Route::get('/privacypolicy', function() {
	return view('privacypolicy');
});

Route::get('/test', function() {
	return view('test');
});