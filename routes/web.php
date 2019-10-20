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
    return view('client.home.index');
});

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@submitLogin')->name('submitLogin');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/change-language/{id}', 'LanguageController@change')->name('changeLanguage');
