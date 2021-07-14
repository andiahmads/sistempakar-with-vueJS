<?php

namespace App\Http\Controllers\User;

use App\Diagnosa;
use App\Pertanyaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RiwayatDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayatsaya = Auth::user()->diagnosa()->latest()->get();
        return view('user.riwayat-diagnosa.index', compact('riwayatsaya'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $riwayatsaya = Diagnosa::find($id);
        $pernyataan = Pertanyaan::latest()->get();
        $tes = Diagnosa::where('rule_id', $riwayatsaya->rule_id)->where('id',$riwayatsaya->id)->get();
        $arrayyakin = [];
        $arraymungkin = [];
        $arraytidakyakin = [];
        foreach ($tes as $datas) {
            if ($datas->gejala_1 == 'yakin') {
                $arrayyakin[] = $datas->gejala_1;
            }
            if ($datas->gejala_1 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_1;
            }
            if ($datas->gejala_1 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_1;
            }
            if ($datas->gejala_2 == 'yakin') {
                $arrayyakin[] = $datas->gejala_2;
            }
            if ($datas->gejala_2 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_2;
            }
            if ($datas->gejala_2 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_2;
            }
            if ($datas->gejala_3 == 'yakin') {
                $arrayyakin[] = $datas->gejala_3;
            }
            if ($datas->gejala_3 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_3;
            }
            if ($datas->gejala_3 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_3;
            }
            if ($datas->gejala_4 == 'yakin') {
                $arrayyakin[] = $datas->gejala_4;
            }
            if ($datas->gejala_4 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_4;
            }
            if ($datas->gejala_4 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_4;
            }
            if ($datas->gejala_5 == 'yakin') {
                $arrayyakin[] = $datas->gejala_5;
            }
            if ($datas->gejala_5 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_5;
            }
            if ($datas->gejala_5 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_5;
            }
            if ($datas->gejala_6 == 'yakin') {
                $arrayyakin[] = $datas->gejala_6;
            }
            if ($datas->gejala_6 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_6;
            }
            if ($datas->gejala_6 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_6;
            }
            if ($datas->gejala_7 == 'yakin') {
                $arrayyakin[] = $datas->gejala_7;
            }
            if ($datas->gejala_7 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_7;
            }
            if ($datas->gejala_7 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_7;
            }
            if ($datas->gejala_8 == 'yakin') {
                $arrayyakin[] = $datas->gejala_8;
            }
            if ($datas->gejala_8 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_8;
            }
            if ($datas->gejala_8 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_8;
            }
            if ($datas->gejala_9 == 'yakin') {
                $arrayyakin[] = $datas->gejala_9;
            }
            if ($datas->gejala_9 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_9;
            }
            if ($datas->gejala_9 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_9;
            }
            if ($datas->gejala_10 == 'yakin') {
                $arrayyakin[] = $datas->gejala_10;
            }
            if ($datas->gejala_10 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_10;
            }
            if ($datas->gejala_10 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_10;
            }
            if ($datas->gejala_14 == 'yakin') {
                $arrayyakin[] = $datas->gejala_14;
            }
            if ($datas->gejala_14 == 'mungkin') {
                $arraymungkin[] = $datas->gejala_14;
            }
            if ($datas->gejala_14 == 'tidak yakin') {
                $arraytidakyakin[] = $datas->gejala_14;
            }

        }

        return view('user.riwayat-diagnosa.component.detail-diagnosa',
            compact('riwayatsaya', 'pernyataan', 'arrayyakin', 'arraymungkin', 'arraytidakyakin'));


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
        //
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
