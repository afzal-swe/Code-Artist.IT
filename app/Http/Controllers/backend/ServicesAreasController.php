<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Service_Areas;

class ServicesAreasController extends Controller
{
    //
    public function Service_Areas_View()
    {

        $service_areas = Service_Areas::orderBy('id', 'DESC')->get();
        return view('backend.pages.service_areas.manage_service_areas', compact('service_areas'));
    } //end



    public function Service_Areas_Store(Request $request)
    {
        $request->validate([
            'country_name' => 'required',
            'country_flag' => 'required', // Ensures the uploaded file is an image
        ]);

        $image = $request->country_flag; // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(546, 546)->save("backend/image/service_areas/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'country_name' => $request->country_name,
                'country_flag' => "backend/image/service_areas/" . $name_gen,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Service_Areas::create($data);

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


    public function Service_Areas_Status($id)
    {
        $check_status = Service_Areas::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Service_Areas::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Service_Areas::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end



    public function Service_Areas_Delete($id)
    {
        $images = Service_Areas::where('id', $id)->first();

        if ($images) {
            $img = $images->country_flag;
            unlink($img);

            Service_Areas::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
