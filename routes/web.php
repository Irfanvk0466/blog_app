<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('/article/{id}', [HomeController::class, 'show'])->name('article.show');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('auth.registerUser');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticateUser'])->name('auth.authenticate');

Route::middleware(AuthMiddleware::class)->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('categories', CategoryController::class);
        Route::resource('tags', TagController::class);
        Route::resource('articles', ArticleController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
