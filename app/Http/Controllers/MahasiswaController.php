<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function tambah(Request $request)
    {
        Mahasiswa::create($request->all());
        return "Data mahasiswa berhasil ditambahkan.";
    }

    public function baca($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        if ($mahasiswa) {
            return $mahasiswa;
        } else {
            return "Mahasiswa dengan NIM $nim tidak ditemukan.";
        }
    }

    public function index() {
        return view('index');
    }
    public function create() {
        return view('crud.create');
    }
}
