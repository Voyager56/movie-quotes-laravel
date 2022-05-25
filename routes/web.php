<?php

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\LangController;
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
*/

Route::get('locale/{lang}', [LangController::class, 'index'])->name('locale');

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/{movie:slug}', [MovieController::class, 'show'])->name('movie.show');

Route::get('/admin/movies/list', [AdminMovieController::class, 'index'])->name('admin.movies.list');
Route::get('/admin/movies/create', [AdminMovieController::class, 'create'])->name('admin.movies.create');
Route::post('/admin/movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');
Route::get('/admin/movies/edit/{movie:slug}', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');
Route::post('/admin/movies/edit/{movie:slug}', [AdminMovieController::class, 'update'])->name('admin.movies.update');

Route::post('logout', [SessionController::class, 'destroy'])->name('logout');
Route::get('admin/login', [SessionController::class, 'create'])->name('login');
Route::post('admin/login', [SessionController::class, 'store'])->name('login.store');

Route::delete('/admin/movies/{movie:slug}/{quote}', [QuotesController::class, 'destroy'])->name('admin.quotes.destroy');
Route::post('/admin/movies/edit/{movie:slug}/create', [QuotesController::class, 'store'])->name('admin.quotes.store');
