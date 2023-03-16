<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioCategoryController;

//** Admins Routes**/
Route::get('/dashboard', function(){
    return view('admin.pages.dashboard');
});

Route::resource('/portfolio-category', PortfolioCategoryController::class);
Route::resource('/portfolio', PortfolioController::class);

//** Frontend Routes**/

Route::get('/', [ FrontendPageController::class, 'showHomePage' ]) -> name('home.page');
