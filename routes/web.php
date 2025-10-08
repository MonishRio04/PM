<?php

use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index']);
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('admin/login', [AdminController::class, 'loginSubmit']);
Route::get('portfolio/{id}',[IndexController::class,'portfolioDetails']);
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('portfolios', PortfolioController::class);
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
Route::any('contact-us',function(){
    Log::info("contact-us".json_encode(request()->all()));
    return redirect()->back();
});
