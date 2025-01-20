<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Our_Expartics;

class OurExparticsController extends Controller
{
    //
    public function Our_Expartics_View()
    {

        $expartics = Our_Expartics::orderBy('id', 'DESC')->get();
        return view('backend.pages.our_expartics.manage_expartics', compact('expartics'));
    } //end


    public function Our_Expartics_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Ensures the uploaded file is an image
        ]);

        $image = $request->file('image'); // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(546, 546)->save("frontend/image/our_expartics/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'title' => $request->title,
                'status' => $request->status,
                'image' => "frontend/image/our_expartics/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Our_Expartics::create($data);

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

    public function Our_Expartics_Status($id)
    {

        $check_status = Our_Expartics::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Our_Expartics::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Our_Expartics::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end

    public function Our_Expartics_Delete($id)
    {
        $images = Our_Expartics::where('id', $id)->first();

        if ($images) {
            $img = $images->image;
            unlink($img);

            Our_Expartics::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
