<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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

// validating users
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);

Route::get('/employee',[EmployeeController::class,'getEmployee']);

Route::post('/set-fingerint',[EmployeeController::class,'setFingerprint']);

// getting employee

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
