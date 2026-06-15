<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menyediakan data sementara untuk 4 kotak statistik di Dashboard
        $total_anggota = 0;
        $total_simpanan = 0;
        $total_pinjaman = 0;
        $total_angsuran = 0;

        return view('dashboard', compact('total_anggota', 'total_simpanan', 'total_pinjaman', 'total_angsuran'));
    }
}