<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Innovative_Products;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class InnovativeProductController extends Controller
{
    //

    public function Innovative_Product_View()
    {
        $innovative_product = Innovative_Products::orderBy('id', 'DESC')->get();
        return view('backend.pages.innovative_product.manage_product', compact('innovative_product'));
    }



    // Innovative Product Store
    public function Innovative_Product_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'products_img' => 'required|image|mimes:jpeg,png,jpg,gif', // Ensures the uploaded file is an image
        ]);

        $image = $request->file('products_img'); // Retrieve the uploaded image

        if ($image) {
            // Generate a unique name for the image
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();

            // Resize and save the image using Intervention Image
            Image::make($image)->resize(800, 600)->save("frontend/image/innovative/" . $name_gen);

            // Prepare data for insertion
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'products_img' => "frontend/image/innovative/" . $name_gen,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Innovative_Products::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'Innovative Product added successfully!',
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


    public function Innovative_Product_Status($id)
    {
        $check_status = Innovative_Products::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Innovative_Products::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Innovative_Products::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end

    public function Innovative_Product_Delete($id)
    {
        $image = Innovative_Products::where('id', $id)->first();

        if ($image) {
            $img = $image->products_img;
            unlink($img);

            Innovative_Products::where('id', $id)->delete();

            $notification = array('messege' => 'Feedback Delete Successfully !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } //end
}
