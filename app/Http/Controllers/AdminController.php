<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        return view("back.pages.home");
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin.login');
    }
    public function changeProfilePicture(Request $request)
    {
        $user = User::find(auth('web')->id());
        $path = 'back/dist/img/authors/';
        $file = $request->file('file');
        $old_picture = $user->getAttributes()['picture'];
        $file_path = $path . $old_picture;
        $new_picture_name = 'AIMG' . $user->id . time() . rand(1, 100000) . '.jpg';

        if ($old_picture != null && File::exists(public_path($file_path))) {
            File::delete(public_path($file_path));
        }
        $upload = $file->move(public_path($path), $new_picture_name);
        if ($upload) {
            $user->update([
                'picture' => $new_picture_name
            ]);
            return response()->json(['status' => 1, 'msg' => 'Your profile picture has been successfully updated.']);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, try again later']);
        }
    }

    public function changeBlogLogo(Request $request)
    {
        $setting = Setting::find(1);
        $logo_path = 'back/dist/img/logo-favicon/';
        $old_logo = $setting->getAttributes()['web_logo'];
        $file = $request->file('web_logo');
        $filename = rand(1, 100000) . 'logo.png';
        if ($request->hasFile('web_logo')) {
            if ($old_logo != null  && File::exists(public_path($logo_path . $old_logo))) {
                File::delete(public_path($logo_path . $old_logo));
            }
            $upload = $file->move(public_path($logo_path), $filename);
            if ($upload) {
                $setting->update([
                    'web_logo' => $filename
                ]);
                return response()->json(['status' => 1, 'msg' => 'Larablog has been successfuly updated.']);
            } else {
                return response()->json(['status' => 0, 'msg' => 'Something wrong!']);
            }
        }
    }
    public function changeBlogFavicon(Request $request)
    {
        $setting = Setting::find(1);
        $favicon_path = 'back/dist/img/logo-favicon/';
        $old_favicon = $setting->getAttributes()['web_favicon'];
        $file = $request->file('web_favicon');
        $filename = rand(1, 100000) . 'favicon.ico';
        if ($request->hasFile('web_favicon')) {
            if ($old_favicon != null  && File::exists(public_path($favicon_path . $old_favicon))) {
                File::delete(public_path($favicon_path . $old_favicon));
            }
            $upload = $file->move(public_path($favicon_path), $filename);
            if ($upload) {
                $setting->update([
                    'web_favicon' => $filename
                ]);
                return response()->json(['status' => 1, 'msg' => 'Larablog has been successfuly updated.']);
            } else {
                return response()->json(['status' => 0, 'msg' => 'Something wrong!']);
            }
        }
    }
}
