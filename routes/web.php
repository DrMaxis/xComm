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

Auth::routes();

Route::get('/landing', 'PageController@landing')->name('landing');
Route::get('/dash', 'PageController@dashboard')->name('dashboard');
Route::get('/dash/transfer', 'PageController@changeFunds')->name('transferMoney');



//Route::get('/home', 'HomeController@index')->name('home');
