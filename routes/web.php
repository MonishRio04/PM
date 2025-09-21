<?php

use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\AdminController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('admin/login', [AdminController::class, 'loginSubmit']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('portfolios', PortfolioController::class);
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
