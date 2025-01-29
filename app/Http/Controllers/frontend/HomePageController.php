<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\People_Panel;

class HomePageController extends Controller
{
    //

    public function home_page()
    {

        return view('frontend.layouts.main');
    }


    public function Advisory_Panel_View()
    {
        $people_panels = People_Panel::where('status', 1)->where('people_anel', 1)->get();
        return view('frontend.pages.managerial_panel.advisory', compact('people_panels'));
    }

    public function Managerial_Panel_View()
    {
        $people_panels = People_Panel::where('status', 1)->where('people_anel', 2)->get();
        return view('frontend.pages.managerial_panel.managerial_panel', compact('people_panels'));
    }

    public function Full_Time_Employee_iew()
    {
        $people_panels = People_Panel::where('status', 1)->where('people_anel', 3)->get();
        return view('frontend.pages.managerial_panel.full_time_employee', compact('people_panels'));
    }

    public function Project_Based_Empolyee_View()
    {
        $people_panels = People_Panel::where('status', 1)->where('people_anel', 4)->get();
        return view('frontend.pages.managerial_panel.project_based_employee', compact('people_panels'));
    }

    public function Intern_View()
    {
        $people_panels = People_Panel::where('status', 1)->where('people_anel', 5)->get();
        return view('frontend.pages.managerial_panel.intern', compact('people_panels'));
    }
}
