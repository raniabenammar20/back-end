<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\StudentController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/** ---------Register and Login ----------- */
Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('users', 'login')->name('index');

});

/** -----------Users --------------------- */
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [AuthController::class, 'index'])->name('index');
});

Route::middleware('auth:sanctum')->controller(AuthController::class)->group(function () {
    Route::get('/users', 'index')->name('index');
});

// Create Student

Route::controller(StudentController::class)->group(function () {
    Route::post('createStudent', 'createStudent');
    

});

