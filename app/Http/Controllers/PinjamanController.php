<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjaman = session()->get('data_pinjaman', [
            ['id' => 1, 'nama_anggota' => 'Christine', 'jumlah' => 2000000, 'bunga' => 5, 'total' => 2100000, 'tanggal' => '2026-06-01']
        ]);
        return view('pinjaman.index', compact('pinjaman'));
    }

    public function create()
    {
        return view('pinjaman.create');
    }

    public function store(Request $request)
    {
        $pinjaman = session()->get('data_pinjaman', []);
        
        // Logika sederhana hitung total dengan bunga
        $bunga = ($request->jumlah * $request->bunga) / 100;
        $total = $request->jumlah + $bunga;

        $dataBaru = [
            'id' => count($pinjaman) + 1,
            'nama_anggota' => $request->nama_anggota,
            'jumlah' => $request->jumlah,
            'bunga' => $request->bunga,
            'total' => $total,
            'tanggal' => $request->tanggal
        ];

        $pinjaman[] = $dataBaru;
        session()->put('data_pinjaman', $pinjaman);

        return redirect('/pinjaman');
    }
}