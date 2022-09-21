<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiStudentController;

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
// Users routes
//  Route::middleware('auth:sanctum')->group(function (){
    Route::apiResource('users', ApiUserController::class);
//  });
// students routes
//  Route::middleware('auth:sanctum')->group(function (){
    Route::apiResource('students', ApiStudentController::class);
//  });