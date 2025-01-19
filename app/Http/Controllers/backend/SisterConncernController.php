<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Sister_Concern;

class SisterConncernController extends Controller
{
    //

    public function sister_concern_View()
    {
        $sister_conncern = Sister_Concern::orderBy('id', 'DESC')->get();
        return view('backend.pages.sister_conncern.manage_sister_conncern', compact('sister_conncern'));
    } //end



    // Sister Conncern Function Start
    public function Sister_Concern_Store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $icon_class_link = $request->icon; // Retrieve the uploaded image

        if ($icon_class_link) {

            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ];

            // Insert into the database
            Sister_Concern::create($data);

            // Redirect with a success notification
            $notification = [
                'messege' => 'New added successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        } else {
            // Redirect with an error notification if no image was uploaded
            $notification = [
                'messege' => 'Icon Link upload failed!',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }
    } // End


    public function Sister_Conncern_Status($id)
    {
        $check_status = Sister_Concern::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Sister_Concern::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Sister_Concern::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end


    public function Sister_Conncern_Delete($id)
    {
        Sister_Concern::where('id', $id)->delete();

        $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
        return redirect()->back()->with($notification);
    } //end
}
