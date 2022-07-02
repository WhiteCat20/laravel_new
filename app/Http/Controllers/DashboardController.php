<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $namaSiswa = 'Faiz';
        return view('dashboard.index', [
            'nama' => $namaSiswa
        ]);
    }
}
