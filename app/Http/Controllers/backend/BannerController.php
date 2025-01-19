<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    //

    public function Banner_View()
    {

        $banner = Banner::orderBy('id', 'DESC')->get();
        return view('backend.pages.banner.manage', compact('banner'));
    }






    // Banner Store Section
    public function Banner_Store(Request $request)
    {
        $request->validate([
            'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensures the uploaded file is an image
        ]);

        $image = $request->file('banner_img'); // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(1920, 1080)->save(public_path("frontend/image/banner/") . $name_gen);

            // Prepare data for insertion
            $data = [
                'banner_img' => "frontend/image/banner/" . $name_gen,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Banner::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'Banner added successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        } else {
            // Redirect with an error notification if no image was uploaded
            $notification = [
                'messege' => 'Image upload failed!',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }
    }



    /// Banner Status Section 
    public function Home_Page_Status($id)
    {
        $check_status = Banner::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Banner::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Banner::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    }



    // banner delete function
    // Banner Delete Function
    public function Banner_Delete($id)
    {

        $image = Banner::where('id', $id)->first();

        if ($image) {
            $img = $image->banner_img;
            unlink($img);

            Banner::where('id', $id)->delete();

            $notification = array('messege' => 'Banner Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
