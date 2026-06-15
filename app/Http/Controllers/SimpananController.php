<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananController extends Controller
{
    // Menampilkan halaman tabel daftar simpanan
    public function index()
    {
        // Contoh data simpanan awal
        $simpanan = session()->get('data_simpanan', [
            ['id' => 1, 'nama_anggota' => 'Christine', 'jenis_simpanan' => 'Simpanan Pokok', 'jumlah' => 500000, 'tanggal' => '2026-06-01'],
            ['id' => 2, 'nama_anggota' => 'Angelina', 'jenis_simpanan' => 'Simpanan Wajib', 'jumlah' => 100000, 'tanggal' => '2026-06-05']
        ]);

        // PASTIKAN ini mengarah ke folder simpanan dan file index
        return view('simpanan.index', compact('simpanan'));
    }

    // Menampilkan form tambah simpanan
    public function create()
    {
        return view('simpanan.create');
    }

    // Menyimpan data simpanan baru
    public function store(Request $request)
    {
        $simpanan = session()->get('data_simpanan', []);

        $dataBaru = [
            'id' => count($simpanan) + 1,
            'nama_anggota' => $request->nama_anggota,
            'jenis_simpanan' => $request->jenis_simpanan,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ];

        $simpanan[] = $dataBaru;
        session()->put('data_simpanan', $simpanan);

        return redirect('/simpanan');
    }
}