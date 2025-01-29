<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    //

    public function Contact_Page()
    {
        return view('frontend.pages.contact.contact');
    }

    public function Contact_Send(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ];

        // Insert into the database
        Contact::insert($data);

        // Redirect with a success notification
        $notification = array('messege' => 'Send successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    } //end

    // admin panel contact all view
    public function Contact_View()
    {
        $view = Contact::orderBy('id', 'DESC')->get();
        return view('backend.pages.contact.contact', compact('view'));
    } //end

    // Delete Contact for Admin Panel
    public function Contact_Delete($id)
    {

        Contact::where('id', $id)->delete();

        $notification = array('messege' => 'Delete Successfully !', 'alert-type' => 'error');
        return redirect()->back()->with($notification);
    } //end
}
