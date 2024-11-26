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

Route::get('/singnup', function () {
    if (Auth::check()) {
        // If the user is already logged in, redirect to the index page
        return redirect('/');
    }

    // If not logged in, show the signup page
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    if (Auth::check()) {
        // If the user is already logged in, redirect to the index page
        return redirect('/index');
    }

    // If not logged in, show the login page
    return view('login');
})->name('login');


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/module', function () {
    return view('module');
})->name('module');

Route::get('/create', function () {
    return view('createProject');
})->name('createProject');
