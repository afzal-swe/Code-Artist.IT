<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    //
    public function Blog_Details()
    {
        return view('frontend.pages.blog.blog_details');
    }
}
