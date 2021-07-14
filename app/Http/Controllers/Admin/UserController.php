<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = DB::table('roles')->distinct()->get(['role', 'id']);
        $users = User::user()->get();
        return view('admin.user.index', compact('users', 'roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6',
            'jenis_kelamin' => 'required|string',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->role_id = $request->role_id;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->status_akun = $request->status_akun;
        $user->save();
        Toastr::success('user berhasil ditambahkan', 'Success');
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $roles = DB::table('roles')->distinct()->get(['role ', 'id']);
        return view('admin.user.components.form-edit-user', compact('users', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191|min:5',
            'jenis_kelamin' => 'required|string',

        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->role_id = $request->role_id;
        $user->save();
        Toastr::success("success", "data user berhasil DiUpdate");
        return redirect()->route('admin.user.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Toastr::error('data berhasil dihapus', 'Sucess');
        return redirect()->route('admin.user.index');
    }

    public function aktifasiAkun($id)
    {
        $user = User::find($id);
        if ($user->status_akun == false) {
            $user->status_akun = true;
            $user->save();
            Toastr::success("success", "user berhasil diaktifasi");
            return redirect()->route('admin.user.index');
        } else if ($user->status_akun == true) {
            $user->status_akun = false;
            $user->save();
            Toastr::success("success", "data user berhasil nonAktifkan");
            return redirect()->route('admin.user.index');
        }


    }
}
