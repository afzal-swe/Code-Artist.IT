<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Faq;

class FaqController extends Controller
{
    //

    public function Faq_View()
    {
        $faq_view = Faq::orderBy('id', 'DESC')->get();

        return view('backend.pages.settings.faq.faq_view', compact('faq_view'));
    } //end

    public function Faq_Store(Request $request)
    {
        $request->validate([
            'faq_questions' => 'required',
            'faq_answers' => 'required',
        ]);

        $data = [
            'faq_questions' => $request->faq_questions,
            'faq_answers' => $request->faq_answers,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ];

        Faq::create($data);

        $notification = array('messege' => 'added successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    } //end

    //Status Update Section
    public function Faq_Status($id)
    {
        $check_status = Faq::where('id', $id)->first();

        $data = array();
        if ($check_status->status == "1") {
            $data['status'] = "0";
            Faq::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Deactive Successfully !', 'alert-type' => 'info');
            return redirect()->back()->with($notification);
        } else {
            $data['status'] = "1";

            Faq::where('id', $id)->update($data);

            $notification = array('messege' => 'Status Active Successfully !', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end

    // Delete Faq Section
    public function Faq_Delete($id)
    {

        Faq::where('id', $id)->delete();

        $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
        return redirect()->back()->with($notification);
    } //end
}
