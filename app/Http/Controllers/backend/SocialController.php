<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use Illuminate\Support\Carbon;

class SocialController extends Controller
{
    //
    public function Social_View()
    {
        $social = Social::first();

        if ($social) {
            return view('backend.pages.settings.social.update', compact('social'));
        } else {
            return view('backend.pages.settings.social.store');
        }
    }


    public function Social_Store(Request $request)
    {
        $request->validate([
            'facebook' => 'required',
        ]);

        Social::insert([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'created_at' => Carbon::now(),
        ]);
        $notification = array('messege' => 'Social Insert Successfully !!', 'alert-type' => "success");
        return redirect()->back()->with($notification);
    }


    public function social_update(Request $request)
    {
        $update = $request->id;

        Social::findOrFail($update)->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('messege' => 'Social Update Successfully !!', 'alert-type' => "success");
        return redirect()->back()->with($notification);
    }
}
