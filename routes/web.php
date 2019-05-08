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



Auth::routes();

Route::resource('calendar', 'gCalendarController');
Route::get('oauth', 'gCalendarController@oauth')->name('oauthCallback');

Route::get('/', 'GoogleController@jsonToPhp');
