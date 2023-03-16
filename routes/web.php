<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendPageController;

Route::get('/dashboard', function(){
    return view('admin.pages.dashboard');
});


//** Frontend Routes**/

Route::get('/', [ FrontendPageController::class, 'showHomePage' ]) -> name('home.page');
