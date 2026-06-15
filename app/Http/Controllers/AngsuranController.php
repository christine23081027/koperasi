<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    public function index()
    {
        $angsuran = session()->get('data_angsuran', [
            ['id' => 1, 'nama_anggota' => 'Christine', 'jumlah_bayar' => 500000, 'tanggal' => '2026-06-10']
        ]);
        return view('angsuran.index', compact('angsuran'));
    }

    public function create()
    {
        return view('angsuran.create');
    }

    public function store(Request $request)
    {
        $angsuran = session()->get('data_angsuran', []);
        
        $dataBaru = [
            'id' => count($angsuran) + 1,
            'nama_anggota' => $request->nama_anggota,
            'jumlah_bayar' => $request->jumlah_bayar,
            'tanggal' => $request->tanggal
        ];

        $angsuran[] = $dataBaru;
        session()->put('data_angsuran', $angsuran);

        return redirect('/angsuran');
    }
}