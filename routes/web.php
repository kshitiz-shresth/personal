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

// For Blog
Route::get('/blogs', [PageController::class, 'showBlogs'])->name('showBlogs');
Route::get('/blog/{slug}', [PageController::class, 'showBlogDetails'])->name('showBlogDetails');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
