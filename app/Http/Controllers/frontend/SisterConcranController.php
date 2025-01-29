<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SisterConcranController extends Controller
{
    //
    public function Sister_Concern_Details()
    {
        return view('frontend.pages.sister_concern.details');
    }
}
