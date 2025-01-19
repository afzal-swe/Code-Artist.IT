<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website_settings;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class WebsiteSettingController extends Controller
{
    //
    public function Website_Settings_View()
    {
        $setting = Website_settings::first();

        if ($setting) {
            return view('backend.pages.settings.website.update', compact('setting'));
        } else {
            return view('backend.pages.settings.website.store', compact('setting'));
        }
    }

    public function Website_Setting_Store(Request $request)
    {
        $request->validate([
            'phone_one' => 'required',
            'phone_two' => 'required',
        ]);

        $name = Str::of($request->website_name)->slug('-');

        if ($request->file('logo') || $request->file('favicon')) {

            $logo = $request->file('logo');
            $favicon = $request->file('favicon');

            $logo_name = $name . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(320, 120)->save("frontend/image/website/logo/" . $logo_name);
            $logo_url = "frontend/image/website/logo" . $logo_name;

            $favicon_name = $name . '.' . $favicon->getClientOriginalExtension();
            Image::make($favicon)->resize(42, 42)->save("frontend/image/website/favicon/" . $favicon_name);
            $favicon_url = "frontend/image/website/favicon/" . $favicon_name;

            Website_settings::insert([
                'website_name' => $request->website_name,
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'main_email' => $request->main_email,
                'support_email' => $request->support_email,
                'address' => $request->address,
                'description' => $request->description,
                'logo' => $logo_url,
                'favicon' => $favicon_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array('messege' => 'Website info added Successfully', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            Website_settings::insert([
                'website_name' => $request->website_name,
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'main_email' => $request->main_email,
                'support_email' => $request->support_email,
                'address' => $request->address,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            $notification = array('messege' => 'Website info added Successfully', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    } //end



    public function website_update(Request $request)
    {
        $update = $request->id;

        $name = Str::of($request->website_name)->slug('-');

        $data = array();
        $data['website_name'] = $request->website_name;
        $data['phone_one'] = $request->phone_one;
        $data['phone_two'] = $request->phone_two;
        $data['main_email'] = $request->main_email;
        $data['support_email'] = $request->support_email;
        $data['address'] = $request->address;
        $data['description'] = $request->description;
        $data['created_at'] = Carbon::now();


        $request_logo = $request->logo;
        $request_favicon = $request->favicon;

        // dd($request_logo);

        if ($request_logo) {

            $settomgs_data = Website_settings::where('id', $update)->first();
            $image_logo = $settomgs_data->logo;
            if ($image_logo) {

                unlink($image_logo);

                $logo_name = $name . '.' . $request_logo->getClientOriginalExtension();
                Image::make($request_logo)->resize(320, 120)->save("frontend/image/website/logo/" . $logo_name);
                $data['logo'] = "frontend/image/website/logo/" . $logo_name;
            }

            $logo_name = $name . '.' . $request_logo->getClientOriginalExtension();
            Image::make($request_logo)->resize(320, 120)->save("frontend/image/website/logo/" . $logo_name);
            $data['logo'] = "frontend/image/website/logo/" . $logo_name;
        }

        if ($request_favicon) {
            $settomgs_data = Website_settings::where('id', $update)->first();
            $old_favicon = $settomgs_data->favicon;
            if ($old_favicon) {

                unlink($old_favicon);

                $favicon_name = $name . '.' . $request_favicon->getClientOriginalExtension();
                Image::make($request_favicon)->resize(32, 32)->save("frontend/image/website/favicon/" . $favicon_name);
                $data['favicon'] = "frontend/image/website/favicon/" . $favicon_name;
            }

            $favicon_name = $name . '.' . $request_favicon->getClientOriginalExtension();
            Image::make($request_favicon)->resize(32, 32)->save("frontend/image/website/favicon/" . $favicon_name);
            $data['favicon'] = "frontend/image/website/favicon/" . $favicon_name;
        }

        Website_settings::where('id', $update)->update($data);

        $notification = array('messege' => 'Website info Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    } //end
}
