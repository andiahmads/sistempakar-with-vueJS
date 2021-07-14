<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function showArtikel()
    {
        return view('user.artikel.index');
    }

    public function blocked()
    {
        return view('blocked');
    }
}
