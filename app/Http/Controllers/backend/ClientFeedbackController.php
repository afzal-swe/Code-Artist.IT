<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Client_Feedback;

class ClientFeedbackController extends Controller
{
    //

    public function Client_Feedback_View()
    {

        $view_feedback = Client_Feedback::orderBy('id', 'DESC')->get();
        return view('backend.pages.client_feedback.feedback_manage', compact('view_feedback'));
    }

    public function Feedback_Store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'client_img' => 'required', // Ensures the uploaded file is an image
        ]);

        $image = $request->client_img; // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(400, 400)->save("backend/image/feedback/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'status' => $request->status,
                'client_img' => "backend/image/feedback/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Client_Feedback::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'Client Feedback added successfully!',
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


    // Feedback Status
    public function Feedback_Status($id)
    {
        $check_status = Client_Feedback::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Client_Feedback::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Client_Feedback::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    }


    // Feedback Delete Function
    public function Feedback_Delete($id)
    {
        $image = Client_Feedback::where('id', $id)->first();

        if ($image) {
            $img = $image->client_img;
            unlink($img);

            Client_Feedback::where('id', $id)->delete();

            $notification = array('messege' => 'Feedback Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
