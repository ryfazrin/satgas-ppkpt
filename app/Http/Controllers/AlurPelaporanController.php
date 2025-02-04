<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlurPelaporanController extends Controller
{
    /**
     * Menampilkan halaman alur pelaporan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('alur_pelaporan.alur_pelaporan'); 
    }
}
