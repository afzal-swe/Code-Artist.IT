<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs;

class BlogsController extends Controller
{
    //
    public function Blogs_View()
    {

        $blogs = Blogs::orderBy('id', 'DESC')->get();
        return view('backend.pages.blogs.manage_blogs', compact('blogs'));
    } //end


    public function blogs_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensures the uploaded file is an image
        ]);

        $image = $request->file('image'); // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(1024, 768)->save(public_path("frontend/image/blogs/") . $name_gen);

            // Prepare data for insertion
            $data = [
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'image' => "frontend/image/blogs/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Blogs::create($data);

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

    public function blogs_Status($id)
    {
        $check_status = Blogs::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Blogs::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Blogs::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end

    public function Blogs_Delete($id)
    {
        $images = Blogs::where('id', $id)->first();

        if ($images) {
            $img = $images->image;
            unlink($img);

            Blogs::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
