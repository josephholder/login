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

Route::get('/', 'AccountController@index')->name('home');

Route::resource('notes', 'NotesController')->except(['create', 'edit']);

Route::get('/login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy')->name('logout');

Route::get('/signup', 'SignupController@index')->name('register');
Route::post('/signup', 'SignupController@store');