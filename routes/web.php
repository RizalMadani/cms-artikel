<?php

use App\Http\Controllers\WebsiteController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
