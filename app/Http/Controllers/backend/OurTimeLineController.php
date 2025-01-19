<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Our_Timeline;

class OurTimeLineController extends Controller
{
    //
    public function Our_Timeline_View()
    {
        $our_timeline = Our_Timeline::orderBy('id', 'DESC')->get();
        return view('backend.pages.our_timelines.manage_timelines', compact('our_timeline'));
    }


    public function Our_Timeline_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'timeline_options' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensures the uploaded file is an image
        ]);

        $image = $request->file('image'); // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(800, 600)->save(public_path("frontend/image/out_timeline/") . $name_gen);

            // Prepare data for insertion
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'timeline_options' => $request->timeline_options,
                'status' => $request->status,
                'image' => "frontend/image/out_timeline/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Our_Timeline::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'New Timeline added successfully!',
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

    public function Our_Timeline_Status($id)
    {
        $check_status = Our_Timeline::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Our_Timeline::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Our_Timeline::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end


    public function Our_Timeline_Delete($id)
    {
        $images = Our_Timeline::where('id', $id)->first();

        if ($images) {
            $img = $images->image;
            unlink($img);

            Our_Timeline::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
