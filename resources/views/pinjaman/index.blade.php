<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pinjaman - Koperasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Koperasi Simpan Pinjam</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                <a class="nav-link text-white" href="{{ url('/anggota') }}">Data Anggota</a>
                <a class="nav-link active fw-bold" href="{{ url('/pinjaman') }}">Data Pinjaman</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">Manajemen Data Pinjaman</h2>
            <a href="{{ url('/pinjaman/create') }}" class="btn btn-primary shadow-sm fw-bold">+ Tambah Pinjaman</a>
        </div>

        <div class="card border-0 shadow-sm">
            <table class="table table-hover mb-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th class="px-4">No</th>
                        <th>Nama Anggota</th>
                        <th>Jumlah Pinjam</th>
                        <th>Bunga</th>
                        <th>Total Tagihan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pinjaman as $key => $item)
                    <tr>
                        <td class="px-4">{{ $key + 1 }}</td>
                        <td>{{ $item['nama_anggota'] }}</td>
                        <td>Rp {{ number_format($item['jumlah'], 0, ',', '.') }}</td>
                        <td>{{ $item['bunga'] }}%</td>
                        <td class="fw-bold text-danger">Rp {{ number_format($item['total'], 0, ',', '.') }}</td>
                        <td>{{ $item['tanggal'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>