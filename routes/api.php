<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Apply Middleware to Relevant Routes
Route::middleware(['auth:api', 'staff'])->group(function () {
    // Routes that require authentication and staff authorization

    Route::apiResource('students', 'App\Http\Controllers\StudentController');
    Route::get('students/search', 'App\Http\Controllers\StudentController@search');
});
