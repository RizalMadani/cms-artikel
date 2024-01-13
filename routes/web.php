<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebsiteController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/post/{post:slug}', [WebsiteController::class, 'post'])->name('website.post');
Route::get('/category/{category:slug}', [WebsiteController::class, 'category'])->name('website.category');

Auth::routes();

Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('/post', [DashboardController::class, 'post'])->name('post');

    Route::resource('category', CategoryController::class)->except(['show']);

    Route::get('/user', [DashboardController::class, 'user'])->name('user');

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});
