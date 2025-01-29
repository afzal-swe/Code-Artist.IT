<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    //
    public function Project_Details()
    {
        return view('frontend.pages.project.development_software');
    }
}
