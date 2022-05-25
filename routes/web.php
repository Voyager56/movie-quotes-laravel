<?php

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LangController;
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

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/{movie:slug}', [MovieController::class, 'show'])->name('movie.show');

Route::post('logout', [SessionController::class, 'destroy'])->name('logout');
Route::get('admin/login', [SessionController::class, 'create'])->name('login');
Route::post('admin/login', [SessionController::class, 'store'])->name('login.store');

Route::get('locale/{lang}', [LangController::class, 'index'])->name('locale');

Route::middleware('auth')->group(function () {
	Route::prefix('movies')->group(function () {
		Route::get('/list', [AdminMovieController::class, 'index'])->name('movies.list');
		Route::get('/create', [AdminMovieController::class, 'create'])->name('movies.create');
		Route::post('/', [AdminMovieController::class, 'store'])->name('movies.store');
		Route::get('/edit/{movie:slug}', [AdminMovieController::class, 'edit'])->name('movies.edit');
		Route::post('/edit/{movie:slug}', [AdminMovieController::class, 'update'])->name('movies.update');
		Route::delete('/delete/{movie:slug}', [AdminMovieController::class, 'destroy'])->name('movies.delete');

		Route::delete('{movie:slug}/{quote}', [QuotesController::class, 'destroy'])->name('quotes.destroy');
		Route::post('edit/{movie:slug}/create', [QuotesController::class, 'store'])->name('quotes.store');
	});
});
