<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\MovieController;
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

Route::get('/{lang?}', [MovieController::class, 'index']);
Route::get('/{lang}/{movie:slug}', [MovieController::class, 'show']);

Route::get('{lang}/admin/movies', [AdminMovieController::class, 'index']);
Route::get('{lang}/admin/{movie:slug}', [AdminMovieController::class, 'create']);
Route::post('{lang}/admin/movie', [AdminMovieController::class, 'store']);
