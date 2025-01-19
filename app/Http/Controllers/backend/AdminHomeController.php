<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminHomeController extends Controller
{
    //

    public function admin_home()
    {
        return view('backend.layouts.main');
    } //end



    /**
     * Log the admin out.
     *
     * This method handles the logout process for the admin. It logs out the authenticated user using the Auth facade.
     * After logging out, it prepares a success notification and redirects the user to the admin login page with the notification.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Admin_logout()
    {
        Auth::logout();
        $notification = array('messege' => 'Logout Successfully', 'alert-type' => 'success');
        return redirect()->route('login')->with($notification);
    } //end



    /**
     * Update the password of the authenticated user.
     *
     * This method validates the request to ensure the old password is provided and that the new password meets the required criteria.
     * It checks if the provided old password matches the current user's password. If it does, the user's password is updated, and they are logged out to reauthenticate with the new password.
     * If the old password does not match, an error notification is returned.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password_change()
    {
        return view('backend.pages.profile.change_password');
    } //end



    public function update_change(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
            // 'password_confirmation' => 'required',
        ]);

        $current_password = Auth::user()->password;

        $oldpass = $request->old_password;
        $newpass = $request->password;

        if (Hash::check($oldpass, $current_password)) {
            $user = User::findOrFail(Auth::id());

            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();


            $notification = array('messege' => 'Password Change Successfully !', 'alert-type' => 'success');
            return redirect()->route('login')->with($notification);
        } else {
            $notification = array('messege' => 'Old Password Not Matched !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    } // End Function //
}
