<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\SessionController;
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

Route::get('/admin/movies/list', [AdminMovieController::class, 'index']);
Route::get('/admin/movies/create', [AdminMovieController::class, 'create']);
Route::post('/admin/movies', [AdminMovieController::class, 'store']);
Route::get('/admin/movies/edit/{movie:slug}', [AdminMovieController::class, 'edit']);
Route::post('/admin/movies/edit/{movie:slug}', [AdminMovieController::class, 'update']);

Route::post('logout', [SessionController::class, 'destroy']);
Route::get('{lang}/admin/login', [SessionController::class, 'create']);
Route::post('{lang}/admin/login', [SessionController::class, 'store']);

Route::delete('/admin/movies/{movie:slug}/{quote}', [QuotesController::class, 'destroy']);
Route::post('/admin/movies/edit/{movie:slug}/create', [QuotesController::class, 'store']);
