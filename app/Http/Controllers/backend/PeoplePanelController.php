<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\People_Panel;

class PeoplePanelController extends Controller
{
    //
    public function People_Panel()
    {
        $people_panel = People_Panel::orderBy('id', 'DESC')->get();
        return view('backend.pages.people_panel.manage_panel', compact('people_panel'));
    } //end



    public function People_Panel_Store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'people_anel' => 'required',
            'image' => 'required', // Ensures the uploaded file is an image
        ]);

        $image = $request->image; // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(600, 600)->save("backend/image/people/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'name' => $request->name,
                'designation' => $request->designation,
                'people_anel' => $request->people_anel,
                'facebook' => $request->facebook,
                'linkdin' => $request->linkdin,
                'instragram' => $request->instragram,
                'website' => $request->website,
                'status' => $request->status,
                'image' => "backend/image/people/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            People_Panel::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'People added successfully!',
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


    public function People_Panel_Status($id)
    {
        $check_status = People_Panel::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            People_Panel::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            People_Panel::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end

    public function People_Panel_Delete($id)
    {
        $images = People_Panel::where('id', $id)->first();

        if ($images) {
            $img = $images->image;
            unlink($img);

            People_Panel::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
