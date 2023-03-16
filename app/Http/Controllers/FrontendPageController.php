<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function showHomePage()
    {
        return view('frontpage.pages.home');
    }
}
