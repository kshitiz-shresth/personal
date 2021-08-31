<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

//Get today's date
Route::post('subscribe',[PageController::class,'subscribe'])->name('subscribe');
Route::get('unsubscribe/{id}',[PageController::class,'unsubscribe'])->name('unsubscribe');
Route::get('/today-nepali-date',[PageController::class,'getTodayNepaliDate'])->name('todayNepaliDate');
Route::get('/rashifal',[PageController::class,'getRashifal'])->name('rashifal');
Route::get('/forex',[PageController::class,'getForex'])->name('forex');
// For Blog
Route::get('/blogs', [PageController::class, 'showBlogs'])->name('showBlogs');
Route::get('/blog/{slug}', [PageController::class, 'showBlogDetails'])->name('showBlogDetails');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
