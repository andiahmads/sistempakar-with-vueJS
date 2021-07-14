<?php

namespace App\Http\Controllers\Admin;

use App\Diagnosa;
use App\Gejala;
use App\Pertanyaan;
use App\PetunjukDiagnosa;
use App\Rule;
use App\Saran;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::latest()->get();
        $gejala = Gejala::latest()->get();
        $rule = Rule::latest()->get();
        $pernyataan = Pertanyaan::latest()->get();
        $saran = Saran::latest()->get();
        $terms = PetunjukDiagnosa::latest()->get();
        $totaldiagnosa = Diagnosa::latest()->get();
        $diagnosatinggi = Diagnosa::where('hasil_diagnosa', 'tinggi')->get();
        $diagnosasedang = Diagnosa::where('hasil_diagnosa', 'sedang')->get();
        $diagnosarendah = Diagnosa::where('hasil_diagnosa', 'rendah')->get();
        $usiap = Diagnosa::where('usia', 'pemuda')->get();
        $usiad = Diagnosa::where('usia', 'dibawah umur')->get();
        $tinggi = [];
        $sedang = [];
        $rendah = [];
        $pemuda = [];
        $bocil = [];
        foreach ($diagnosatinggi as $data1) {
            $tinggi[] = $data1->hasil_diagnosa;
        }
        foreach ($diagnosasedang as $data1) {
            $sedang[] = $data1->hasil_diagnosa;
        }
        foreach ($diagnosarendah as $data1) {
            $rendah[] = $data1->hasil_diagnosa;
        }
        foreach ($usiap as $data1) {
            $pemuda[] = $data1->usia;
        }
        foreach ($usiad as $data1) {
            $bocil[] = $data1->usia;
        }
        return view('admin.dashboard',
            compact('user', 'gejala', 'rule',
                'pernyataan',
                'saran', 'terms', 'totaldiagnosa',
                'tinggi', 'sedang', 'rendah','pemuda','bocil'));
    }

    public function blocked()
    {
        return view('blocked');
    }
}
