<?php

/*
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/article/{id}', [HomeController::class, 'article']);
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [CategoryController::class, 'cat1']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'cat2']);
    Route::get('/riri-story-books', [CategoryController::class, 'cat3']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'cat4']);
});

Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{news}', [NewsController::class, 'news1']);

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'prog1']);
    Route::get('/magang', [ProgramController::class, 'prog2']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'prog3']);
});

Route::redirect('about-us', 'https://www.educastudio.com/about-us');


