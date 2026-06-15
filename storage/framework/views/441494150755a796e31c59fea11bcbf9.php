<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card border-0 shadow-sm col-md-6 mx-auto p-4">
            <h3 class="fw-bold mb-4">Form Pengajuan Pinjaman</h3>
            <form action="<?php echo e(url('/pinjaman')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Pinjaman (Rp)</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bunga (%)</label>
                    <input type="number" name="bunga" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?php echo e(date('Y-m-d')); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Simpan Pinjaman</button>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\simpan_pinjam\resources\views/pinjaman/create.blade.php ENDPATH**/ ?>