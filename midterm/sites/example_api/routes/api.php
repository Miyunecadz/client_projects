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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// This url will store the incoming data to the database
Route::post('/student', [App\Http\Controllers\StudentsController::class, 'store']);

Route::get('/student/{id}', [App\Http\Controllers\StudentsController::class, 'find']);
