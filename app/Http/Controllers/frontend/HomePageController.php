<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class HomePageController extends Controller
{
    //

    public function home_page()
    {

        return view('frontend.layouts.main');
    }

    public function Managerial_Panel_View()
    {
        return view('frontend.pages.managerial_panel.managerial_panel');
    }
}
