<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_lengkap' => 'required',
        'nik' => 'required|numeric|digits:16',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'email' => 'required|email',
        'no_wa' => 'required|numeric',
        'program_studi' => 'required', // Validasi tambahan
    ]);

    // Simpan data atau proses lainnya
    return back()->with('success', 'Form berhasil disubmit!');
}
}
