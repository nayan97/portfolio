<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\Admin\PortfolioCategoryController;

Route::get('/dashboard', function(){
    return view('admin.pages.dashboard');
});

Route::resource('/portfolio-category', PortfolioCategoryController::class);


//** Frontend Routes**/

Route::get('/', [ FrontendPageController::class, 'showHomePage' ]) -> name('home.page');
