<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Notice;

class NoticeController extends Controller
{
    //
    public function Notice_View()
    {
        $notice = Notice::orderBy('id', 'DESC')->get();
        return view('backend.pages.settings.notice.manage_notice', compact('notice'));
    } //end


    public function Notice_Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);


        // Prepare data for insertion
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ];

        // Insert into the database
        Notice::create($data);

        // Redirect with a success notification
        $notification = ['messege' => 'Create successfully!', 'alert-type' => 'success'];
        return redirect()->back()->with($notification);
    } //end


    public function Notice_Status($id)
    {
        $check_status = Notice::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Notice::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Notice::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end


    public function Notice_Delete($id)
    {

        Notice::where('id', $id)->delete();

        $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
        return redirect()->back()->with($notification);
    }
}
