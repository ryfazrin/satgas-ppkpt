<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporan.form_pelaporan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'nullable|string|max:255',
            'kontak_pelapor' => 'nullable|string|max:255',
            'kronologi' => 'required|string',
            'lokasi_kejadian' => 'required|string|max:255',
            'tanggal_kejadian' => 'required|date',
            'bukti_kejadian' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        // Simpan file bukti jika ada
        $buktiPath = null;
        if ($request->hasFile('bukti_kejadian')) {
            $buktiPath = $request->file('bukti_kejadian')->store('bukti', 'public');
        }

        // Simpan data laporan
        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'kontak_pelapor' => $request->kontak_pelapor,
            'kronologi' => $request->kronologi,
            'lokasi_kejadian' => $request->lokasi_kejadian,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'bukti_kejadian' => $buktiPath,
        ]);

        return redirect()->route('laporan.create')->with('success', 'Laporan berhasil dikirim!');
    }
}
