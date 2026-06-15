<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi Simpanan</title>
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="fw-bold text-secondary">Tambah Transaksi Simpanan</h3>
                    <a href="{{ url('/simpanan') }}" class="btn btn-sm btn-outline-secondary fw-bold">← Kembali</a>
                </div>

                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <form action="{{ url('/simpanan') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold text-muted">Nama Anggota</label>
                                <input type="text" name="nama_anggota" class="form-control" placeholder="Masukkan nama anggota..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold text-muted">Jenis Simpanan</label>
                                <select name="jenis_simpanan" class="form-select" required>
                                    <option value="" disabled selected>-- Pilih Jenis Simpanan --</option>
                                    <option value="Simpanan Pokok">Simpanan Pokok</option>
                                    <option value="Simpanan Wajib">Simpanan Wajib</option>
                                    <option value="Simpanan Sukarela">Simpanan Sukarela</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold text-muted">Jumlah Simpanan (Rp)</label>
                                <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 100000" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted">Tanggal Transaksi</label>
                                <input type="date" name="tanggal" class="form-control" value="{{ date('Y-m-d') }}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-bold shadow-sm">Simpan Transaksi</button>
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