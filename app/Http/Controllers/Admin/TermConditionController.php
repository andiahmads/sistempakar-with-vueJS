<?php

namespace App\Http\Controllers\Admin;

use App\PetunjukDiagnosa;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = PetunjukDiagnosa::latest()->get();
        return view('admin.term-condition.index', compact('terms'));
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terms = PetunjukDiagnosa::findOrFail($id);
        $terms->delete();
        Toastr::success("success", "data berhasil dihapus");
        return redirect()->route('admin.petunjuk-diagnosa.index');
    }
}
