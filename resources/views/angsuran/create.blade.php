<div class="container mt-4 col-md-6">
    <h3>Form Pembayaran Angsuran</h3>
    <form action="{{ url('/angsuran') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nama Anggota</label><input type="text" name="nama_anggota" class="form-control" required></div>
        <div class="mb-3"><label>Jumlah Bayar (Rp)</label><input type="number" name="jumlah_bayar" class="form-control" required></div>
        <div class="mb-3"><label>Tanggal</label><input type="date" name="tanggal" class="form-control" value="{{ date('Y-m-d') }}" required></div>
        <button type="submit" class="btn btn-success">Bayar Sekarang</button>
    </form>
</div>