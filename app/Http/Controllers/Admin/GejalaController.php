<?php

namespace App\Http\Controllers\Admin;

use App\Gejala;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Gejala::latest()->get();
        return view('admin.gejala.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gejala' => 'required'
        ]);
        $gejala = new Gejala();
        $gejala->gejala = $request->gejala;
        $gejala->save();
        Toastr::success('data gejala berhasil ditambahkan', 'Success');
        return redirect()->route('admin.gejala.index');
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
        $datas = Gejala::find($id);
        return view('admin.gejala.component.form-edit-gejala', compact('datas'));
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
        $datas = Gejala::find($id);
        $datas->gejala = $request->gejala;
        $datas->save();
        Toastr::success('data gejala berhail diubah', 'Success');
        return redirect()->route('admin.gejala.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Gejala::findOrFail($id);
        $datas->delete();
        Toastr::success('data gejala berhail dihapus', 'Success');
        return redirect()->route('admin.gejala.index');
    }
}
