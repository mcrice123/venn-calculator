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

Route::get('/home', function() {
    if (Auth::check()) {
        // The user is logged in...
        return view('dashboard');
    }
    else {
        return view('auth/login');
    }
});

Route::get('/', function () {
    if (Auth::check()) {
        // The user is logged in...
        return view('dashboard');
    }
    else {
        return view('auth/login');
    }
});

// Handles ALL AUTH requests
Auth::routes();

//Route::post('login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');
