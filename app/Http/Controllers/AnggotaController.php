<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // 1. Menampilkan halaman tabel daftar anggota
    public function index()
    {
        $anggota = session()->get('data_anggota', [
            ['id' => 1, 'nama' => 'Christine', 'alamat' => 'Pekanbaru', 'no_telepon' => '08123456789'],
            ['id' => 2, 'nama' => 'Angelina', 'alamat' => 'Jakarta', 'no_telepon' => '08987654321']
        ]);

        return view('anggota.index', compact('anggota'));
    }

    // 2. Menampilkan halaman form tambah anggota
    public function create()
    {
        return view('anggota.create');
    }

    // 3. Menyimpan data yang dikirim dari form input baru
    public function store(Request $request)
    {
        $anggota = session()->get('data_anggota', [
            ['id' => 1, 'nama' => 'Christine', 'alamat' => 'Pekanbaru', 'no_telepon' => '08123456789'],
            ['id' => 2, 'nama' => 'Angelina', 'alamat' => 'Jakarta', 'no_telepon' => '08987654321']
        ]);

        $dataBaru = [
            'id' => count($anggota) + 1,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ];

        $anggota[] = $dataBaru;
        session()->put('data_anggota', $anggota);

        return redirect('/anggota');
    }

    // 4. Menampilkan Form Edit berdasarkan ID anggota yang dipilih
public function edit($id)
{
    $anggota = session()->get('data_anggota', []);
    $detailAnggota = null;
    foreach ($anggota as $item) {
        if ($item['id'] == $id) {
            $detailAnggota = $item;
            break;
        }
    }

    if (!$detailAnggota) {
        return redirect('/anggota');
    }

    return view('anggota.edit', compact('detailAnggota'));
}

    // 5. Memproses perubahan data anggota
    public function update(Request $request, $id)
    {
        $anggota = session()->get('data_anggota', []);

        // Cari data yang mau diubah lalu ganti isinya dengan inputan baru dari form
        foreach ($anggota as $key => $item) {
            if ($item['id'] == $id) {
                $anggota[$key]['nama'] = $request->nama;
                $anggota[$key]['alamat'] = $request->alamat;
                $anggota[$key]['no_telepon'] = $request->no_telepon;
                break;
            }
        }

        // Simpan kembali ke session
        session()->put('data_anggota', $anggota);

        return redirect('/anggota');
    }

    // 6. Menghapus data anggota berdasarkan ID
    public function destroy($id)
    {
        $anggota = session()->get('data_anggota', []);

        foreach ($anggota as $key => $item) {
            if ($item['id'] == $id) {
                unset($anggota[$key]);
            }
        }

        $anggota = array_values($anggota);
        session()->put('data_anggota', $anggota);

        return redirect('/anggota');
    }
}