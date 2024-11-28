<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;

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

Route::get('/signup', function () {
    if (@auth()->check()) {
        // If the user is already logged in, redirect to the index page
        //return redirect('/');
    }

    // If not logged in, show the signup page
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    if (@auth()->check()) {
        // If the user is already logged in, redirect to the index page
       // return redirect('/');
    }

    // If not logged in, show the login page
    return view('login');
})->name('login');


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/team',[
    AdminController::class, 'teams'] 
)->name('team');

Route::get('/module', [AdminController::class, 'moduleShow'])->name('requestsShow');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/requests', [AdminController::class, 'requestsShow'])->name('requestsShow');

// Route::get('/create', [AdminController::class, 'createProject'])->name('createProject');
// web.php
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/create', [AdminController::class, 'createProject'])->name('createProject');
});
