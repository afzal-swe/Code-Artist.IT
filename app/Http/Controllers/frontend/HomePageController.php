<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function home_page()
    {
        return view('frontend.layouts.main');
    }
}
