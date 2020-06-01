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

// Handles ALL AUTH requests
Auth::routes();

Route::get('/home', function () {
    return view('auth/login');
});

// SHOW Login
Route::get('/', function() {
    return view('auth/login');
});



Route::get('/test', 'HomeController@index')->name('test');

Route::prefix('dashboard')->group(function () {
    //Route::get('/', 'UserController@index')->name('user.index');
    return view('home');

});