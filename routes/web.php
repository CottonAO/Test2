<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/my-profile', function () {
    return view('my-profile');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('index');
Route::post('/login', 'Auth\LoginController@authenticate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');