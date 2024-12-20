<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [MoviesController::class, 'home'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('movies', [MoviesController::class, 'index'])->name('admin.movies.index');
    Route::post('movies', [MoviesController::class, 'store'])->name('admin.movies.store');
    Route::get('movies/{id}', [MoviesController::class, 'edit'])->name('admin.movies.edit');
    Route::put('movies/{id}', [MoviesController::class, 'update'])->name('admin.movies.update');
    Route::delete('movies/{id}', [MoviesController::class, 'destroy'])->name('admin.movies.destroy');
});

Route::get('/rent-movies/{id}', [MoviesController::class, 'rent'])->name('rentpage');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
