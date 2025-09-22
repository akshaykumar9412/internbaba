<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\ProjectSetting;
use Illuminate\Http\Request;

class ProjectSettingsController extends Controller
{
    public function index()
    {
        //hello
        $settings = ProjectSetting::first();
        return view('admin.projectSetting', compact('settings'));
    }

    public function store(Request $request)
    {
        $settings = ProjectSetting::firstOrNew([]);

        // 🔹 Upload Logo
        if ($request->hasFile('logo')) {
            $logoName = time().'_logo.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/settings'), $logoName);
            $settings->logo = 'uploads/settings/' . $logoName;
        }

        // 🔹 Upload Favicon
        if ($request->hasFile('favicon')) {
            $faviconName = time().'_favicon.'.$request->favicon->extension();
            $request->favicon->move(public_path('uploads/settings'), $faviconName);
            $settings->favicon = 'uploads/settings/' . $faviconName;
        }

        // 🔹 Upload Meta Image
        if ($request->hasFile('meta_image')) {
            $meta_imageName = time().'_meta.'.$request->meta_image->extension();
            $request->meta_image->move(public_path('uploads/settings'), $meta_imageName);
            $settings->meta_image = 'uploads/settings/' . $meta_imageName;
        }

        // 🔹 Save All Other Fields
        $settings->fill($request->except(['logo', 'favicon', 'meta_image', '_token']));

        $settings->save();
        $request->session()->flash("flash_message","Project settings has been udate");

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}