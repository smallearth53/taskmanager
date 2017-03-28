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

Route::get('/about', function () {
    return view('about');
});

Route::get('/useradmin', function () {
    return view('layouts.app');
});

Route::get('/contact', 'ContactController@index');

Route::get('/contact/list', 'ReportsController@listContacts');

Route::post('/contact', 'ContactController@post');

Route::get('/contact/show', 'ContactController@listContacts');

Route::get('/contact/show/{contact}', 'ContactController@show');


Auth::routes();

Route::get('/home', 'HomeController@index');
