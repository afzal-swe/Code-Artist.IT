<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function Contact_Page()
    {
        return view('frontend.pages.contact.contact');
    }
}
