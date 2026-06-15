<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Koperasi Simpan Pinjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Koperasi Simpan Pinjam</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-dark navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/anggota') }}">Data Anggota</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4 fw-bold text-secondary">Dashboard Ringkasan Data</h2>
        
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card bg-white text-dark border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase small font-weight-bold">Total Anggota</h6>
                        <h2 class="font-weight-bold my-2 text-primary">{{ $total_anggota }}</h2>
                        <span class="text-muted small">Orang Terdaftar</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-white text-dark border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase small font-weight-bold">Total Simpanan</h6>
                        <h2 class="font-weight-bold my-2 text-success">Rp {{ number_format($total_simpanan) }}</h2>
                        <span class="text-muted small">Dana Terkumpul</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-white text-dark border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase small font-weight-bold">Total Pinjaman</h6>
                        <h2 class="font-weight-bold my-2 text-danger">Rp {{ number_format($total_pinjaman) }}</h2>
                        <span class="text-muted small">Dana Dipinjam</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-white text-dark border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <h6 class="text-muted text-uppercase small font-weight-bold">Total Angsuran</h6>
                        <h2 class="font-weight-bold my-2 text-warning">Rp {{ number_format($total_angsuran) }}</h2>
                        <span class="text-muted small">Pembayaran Masuk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>