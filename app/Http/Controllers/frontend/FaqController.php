<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //
    public function Faq_Page()
    {
        $faq = Faq::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.pages.faq.faq', compact('faq'));
    } //end
}
