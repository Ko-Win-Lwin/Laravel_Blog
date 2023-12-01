<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Product\ProductController;

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

// Article routes
Route::get('/', [ArticleController::class, "index"]);

Route::get('/articles', [ArticleController::class, "index"]);

Route::get('/articles/detail/{id}', [ArticleController::class, "detail"]);


// Product routes
Route::get('/products', [ProductController::class, "index"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
