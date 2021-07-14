<?php

namespace App\Http\Controllers\User;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.setting-user-profile.index');
    }
        public function updateProfile(Request $request)
    {
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email",
        ]);
        $image = $request->file('images');
        $slug = str_slug($request->name);
        $user = User::findOrFail(Auth::id());

        if (isset($image)) {
            $currentDate = carbon::now()->toDateString();
            $imageName = $slug . '-' . $currentDate . '-' . uniqid() . '-' . $image->getClientOriginalExtension();

            //cek apakah foto sudah tersedia
            if (!Storage::disk('public')->exists('profile')) {
                Storage::disk('public')->makeDirectory('profile');
            }


            //hapus image jika sudah tersedia
            if (Storage::disk('public')->exists('profile/' . $user->image)) {
                Storage::disk('public')->delete('profile/' . $user->image);
            }

            $profile = Image::make($image)->resize(500, 500)->save();
            Storage::disk('public')->put('profile/' . $imageName, $profile);
        } else {
            $imageName = $user->image;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $imageName;
        $user->biodata = $request->biodata;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->save();
        Toastr::success('profile berhasil diupdate', 'Success');
        return redirect()->back();
    }

          public function updatePassword(Request $request) {
        $this->validate($request,[
           'old_password'=>'required',
           'password'=>'required|confirmed',
        ]);
        //get data berdasarkan password
        $hashedPassword = Auth::user()->password;

        //cek apakah password lama valid
        if(Hash::check($request->old_password,$hashedPassword)) {

            if(!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();

                Toastr::success('Password Berhasil DiUpdate','Success');
                return redirect()->back();
            }
            else {
                Toastr::error('Password baru yang anda inputkan tidak sama dengan password lama','Error');
                return redirect()->back();
            }
        }
          else {
            Toastr::error('Password lama yang Anda inputkan Tidak Cocok','Error');
            return redirect()->back();
        }

    }


}
