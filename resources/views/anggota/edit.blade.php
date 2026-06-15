<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="fw-bold text-secondary">Edit Data Anggota</h3>
                    <a href="{{ url('/anggota') }}" class="btn btn-sm btn-outline-secondary fw-bold">← Kembali</a>
                </div>

                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <form action="{{ url('/anggota/' . $detailAnggota['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold text-muted">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ $detailAnggota['nama'] }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold text-muted">Alamat Rumah</label>
                                <textarea name="alamat" class="form-control" rows="3" required>{{ $detailAnggota['alamat'] }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted">No. Telepon / WA</label>
                                <input type="number" name="no_telepon" class="form-control" value="{{ $detailAnggota['no_telepon'] }}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning text-dark fw-bold shadow-sm">Simpan Perubahan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>