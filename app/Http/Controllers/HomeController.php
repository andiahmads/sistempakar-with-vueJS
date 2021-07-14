<?php

namespace App\Http\Controllers;

use App\User;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */


    public function index()
    {
        return view('auth.login');
    }

    public function blocked()
    {
        return view('blocked');
    }

    public function store(Request $request)

    {
        $this->validate($request, [
            'name' => 'required|string|max:191|min:5',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6',
            'jenis_kelamin' => 'required|string',

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->save();
        Toastr::success("success", "registrasi akun berhasil");
        return redirect()->route('login');

    }
}
