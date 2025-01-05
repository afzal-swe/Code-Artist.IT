<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function About_Page()
    {
        return view('frontend.pages.about.about');
    }
}
