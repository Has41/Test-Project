<?php

use App\Http\Controllers\Api\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('profile', 'profile');
    Route::put('update', 'update');
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::delete('destroy', 'destroy');
});


Route::controller(AdminController::class)->group(function () {
    Route::post('store','store' );

});
 Route::post('/update-status', [AdminController::class, 'updateStatus']);
//Route::middleware('auth:api')->post('/update-status', [AdminController::class, 'updateStatus']);
Route::post('/delete-project', [AdminController::class, 'deleteProject']);
Route::post('/request', [AdminController::class, 'request']);
