<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - Koperasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Koperasi Simpan Pinjam</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-dark navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/anggota') }}">Data Anggota</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">Manajemen Data Anggota</h2>
            <a href="{{ url('/anggota/create') }}" class="btn btn-primary shadow-sm fw-bold">+ Tambah Anggota Baru</a>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th class="py-3 px-4">No</th>
                            <th class="py-3">Nama Lengkap</th>
                            <th class="py-3">Alamat Rumah</th>
                            <th class="py-3">No. Telepon</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($anggota as $key => $item)
                        <tr>
                            <td class="py-3 px-4">{{ $key + 1 }}</td>
                            <td class="py-3 fw-bold text-secondary">{{ $item['nama'] }}</td>
                            <td class="py-3">{{ $item['alamat'] }}</td>
                            <td class="py-3">{{ $item['no_telepon'] }}</td>
                            <td class="py-3 text-center">
                                <a href="{{ url('/anggota/' . $item['id'] . '/edit') }}" class="btn btn-sm btn-warning me-1 fw-bold">Edit</a>
                                
                                <form action="{{ url('/anggota/' . $item['id']) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus anggota ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger fw-bold">Hapus</button>
                                </form>
                            </td>
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