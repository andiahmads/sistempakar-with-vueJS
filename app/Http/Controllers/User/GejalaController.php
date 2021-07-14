<?php

namespace App\Http\Controllers\User;

use App\Gejala;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GejalaController extends Controller
{
    public function index(){
        $gejala = Gejala::latest()->get();
        return view('user.gejala.index',compact('gejala'));
    }
}
