<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PageController;
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
Route::get('rashifal',[PageController::class,'rashifalAPI']);

// getting employee

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
