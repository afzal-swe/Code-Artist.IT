<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\We_Have;

class WeHaveController extends Controller
{
    //
    public function We_Have_View()
    {

        $project_status = We_Have::orderBy('id', 'DESC')->get();
        return view('backend.pages.we_have.manage_we_have', compact('project_status'));
    } //end


    public function We_Have_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required', // Ensures the uploaded file is an image
        ]);

        // Prepare data for insertion
        $data = [
            'title' => $request->title,
            'total' => $request->total,
            'icon' => $request->icon,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ];

        // Insert into the database
        We_Have::create($data);

        // Redirect with a success notification
        $notification = [
            'messege' => 'Create successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    } //end


    public function We_Have_Status($id)
    {
        $check_status = We_Have::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            We_Have::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            We_Have::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end

    public function We_Have_Delete($id)
    {
        We_Have::where('id', $id)->delete();

        $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
        return redirect()->back()->with($notification);
    }
}
