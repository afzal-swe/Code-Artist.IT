<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Development_Software;

class DevelopmentSoftwareController extends Controller
{
    //
    public function Development_Software_View()
    {

        $development_software = Development_Software::orderBy('id', 'DESC')->get();
        return view('backend.pages.development_software.manage_software', compact('development_software'));
    } //end



    public function Development_Software_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'development_options' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Ensures the uploaded file is an image
        ]);

        $image = $request->file('image'); // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(1024, 768)->save("frontend/image/our_development/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'title' => $request->title,
                'link' => $request->link,
                'development_options' => $request->development_options,
                'status' => $request->status,
                'image' => "frontend/image/our_development/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Development_Software::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'Create successfully!',
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
    } //end


    public function Development_Software_Status($id)
    {
        $check_status = Development_Software::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Development_Software::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Development_Software::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end


    public function Development_Software_Delete($id)
    {
        $images = Development_Software::where('id', $id)->first();

        if ($images) {
            $img = $images->image;
            unlink($img);

            Development_Software::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
