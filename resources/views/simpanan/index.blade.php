<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Simpanan - Koperasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Koperasi Simpan Pinjam</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-dark navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/anggota') }}">Data Anggota</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/simpanan') }}">Data Simpanan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">Manajemen Data Simpanan</h2>
            <a href="{{ url('/simpanan/create') }}" class="btn btn-primary shadow-sm fw-bold">+ Tambah Transaksi Simpanan</a>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th class="py-3 px-4">No</th>
                            <th class="py-3">Nama Anggota</th>
                            <th class="py-3">Jenis Simpanan</th>
                            <th class="py-3">Jumlah (Rp)</th>
                            <th class="py-3">Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($simpanan as $key => $item)
                        <tr>
                            <td class="py-3 px-4">{{ $key + 1 }}</td>
                            <td class="py-3 fw-bold text-secondary">{{ $item['nama_anggota'] }}</td>
                            <td class="py-3"><span class="badge bg-success">{{ $item['jenis_simpanan'] }}</span></td>
                            <td class="py-3">Rp {{ number_format($item['jumlah'], 0, ',', '.') }}</td>
                            <td class="py-3">{{ $item['tanggal'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>