<?php

namespace App\Http\Controllers\Admin;

use App\Rule;
use App\Saran;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saran = Saran::orderBy('id', 'asc')->get();
        $rules = Rule::latest()->get();
        return view('admin.saran.index', compact('saran', 'rules'));
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
        $this->validate($request, [
            'rule_id' => 'required|unique:sarans',
        ]);
        $saran = new Saran();
        $saran->rule_id = $request->rule_id;
        $saran->saran = $request->saran;
        $saran->save();
        Toastr::success('data saran berhasil ditambahkan', 'Success');
        return redirect()->route('admin.saran.index');
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
        $rules = Rule::latest()->get();
        $saran = Saran::find($id);
        return view('admin.saran.component.form-edit-saran', compact('saran', 'rules'));
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
        $saran = Saran::find($id);
        $saran->rule_id = $request->rule_id;
        $saran->saran = $request->saran;
        $saran->save();
        Toastr::success('data saran berhasil diupdate', 'Success');
        return redirect()->route('admin.saran.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saran = Saran::findOrFail($id);
        $saran->delete();
        Toastr::success('data saran berhasil dihapus', 'Success');
        return redirect()->route('admin.saran.index');
    }
}
