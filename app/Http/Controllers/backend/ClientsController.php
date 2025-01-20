<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Client;

class ClientsController extends Controller
{
    //
    public function clients_View()
    {

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('backend.pages.honorable_clients.manage_clients', compact('clients'));
    } //end




    public function Clients_Store(Request $request)
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
            Image::make($image)->resize(546, 546)->save("frontend/image/clients/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'title' => $request->title,
                'image' => "frontend/image/clients/" . $name_gen,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Client::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'Clients added successfully!',
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


    public function Clients_Status($id)
    {
        $check_status = Client::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Client::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Client::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end


    public function Clients_Delete($id)
    {
        $images = Client::where('id', $id)->first();

        if ($images) {
            $img = $images->image;
            unlink($img);

            Client::where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
