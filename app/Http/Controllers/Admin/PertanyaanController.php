<?php

namespace App\Http\Controllers\Admin;

use App\Pertanyaan;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pernyataan = Pertanyaan::latest()->get();
        return view('admin.pertanyaan.index',compact('pernyataan'));
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
            'usia' => 'required|string|max:191|min:5',
            'pernyataan_G1' => 'required|string|max:191|min:5',
            'pernyataan_G2' => 'required|string|max:191|min:5',
            'pernyataan_G3' => 'required|string|max:191|min:5',
            'pernyataan_G4' => 'required|string|max:191|min:5',
            'pernyataan_G5' => 'required|string|max:191|min:5',
            'pernyataan_G6' => 'required|string|max:191|min:5',
            'pernyataan_G7' => 'required|string|max:191|min:5',
            'pernyataan_G8' => 'required|string|max:191|min:5',
            'pernyataan_G9' => 'required|string|max:191|min:5',
            'pernyataan_G10' => 'required|string|max:191|min:5',
            'pernyataan_G14' => 'required|string|max:191|min:5',
        ]);
        $pernyataan = new Pertanyaan();
        $pernyataan->pernyataan_usia = $request->usia;
        $pernyataan->pernyataan_G1 = $request->pernyataan_G1;
        $pernyataan->pernyataan_G2 = $request->pernyataan_G2;
        $pernyataan->pernyataan_G3 = $request->pernyataan_G3;
        $pernyataan->pernyataan_G4 = $request->pernyataan_G4;
        $pernyataan->pernyataan_G5 = $request->pernyataan_G5;
        $pernyataan->pernyataan_G6 = $request->pernyataan_G6;
        $pernyataan->pernyataan_G7 = $request->pernyataan_G7;
        $pernyataan->pernyataan_G8 = $request->pernyataan_G8;
        $pernyataan->pernyataan_G9 = $request->pernyataan_G9;
        $pernyataan->pernyataan_G10 = $request->pernyataan_G10;
        $pernyataan->pernyataan_G14 = $request->pernyataan_G14;
        $pernyataan->save();
        Toastr::success('pertanyaan berhasil ditambahkan', 'Success');
        return redirect()->route('admin.pertanyaan.index');

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
        //
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
            'usia' => 'required|string|max:191|min:5',
            'pernyataan_G1' => 'required|string|max:191|min:5',
            'pernyataan_G2' => 'required|string|max:191|min:5',
            'pernyataan_G3' => 'required|string|max:191|min:5',
            'pernyataan_G4' => 'required|string|max:191|min:5',
            'pernyataan_G5' => 'required|string|max:191|min:5',
            'pernyataan_G6' => 'required|string|max:191|min:5',
            'pernyataan_G7' => 'required|string|max:191|min:5',
            'pernyataan_G8' => 'required|string|max:191|min:5',
            'pernyataan_G9' => 'required|string|max:191|min:5',
            'pernyataan_G10' => 'required|string|max:191|min:5',
            'pernyataan_G14' => 'required|string|max:191|min:5',
        ]);
        $pernyataan = Pertanyaan::find($id);
        $pernyataan->pernyataan_usia = $request->usia;
        $pernyataan->pernyataan_G1 = $request->pernyataan_G1;
        $pernyataan->pernyataan_G2 = $request->pernyataan_G2;
        $pernyataan->pernyataan_G3 = $request->pernyataan_G3;
        $pernyataan->pernyataan_G4 = $request->pernyataan_G4;
        $pernyataan->pernyataan_G5 = $request->pernyataan_G5;
        $pernyataan->pernyataan_G6 = $request->pernyataan_G6;
        $pernyataan->pernyataan_G7 = $request->pernyataan_G7;
        $pernyataan->pernyataan_G8 = $request->pernyataan_G8;
        $pernyataan->pernyataan_G9 = $request->pernyataan_G9;
        $pernyataan->pernyataan_G10 = $request->pernyataan_G10;
        $pernyataan->pernyataan_G14 = $request->pernyataan_G14;
        $pernyataan->save();
        Toastr::success('pertanyaan berhasil diedit', 'Success');
        return redirect()->route('admin.pertanyaan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
