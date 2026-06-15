<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Angsuran - Koperasi</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Koperasi Simpan Pinjam</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
                <a class="nav-link text-white" href="<?php echo e(url('/anggota')); ?>">Data Anggota</a>
                <a class="nav-link active fw-bold" href="<?php echo e(url('/angsuran')); ?>">Data Angsuran</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">Manajemen Data Angsuran</h2>
            <a href="<?php echo e(url('/angsuran/create')); ?>" class="btn btn-primary shadow-sm fw-bold">+ Cicil Pinjaman</a>
        </div>

        <!-- Tabel yang sudah dipercantik -->
        <div class="card border-0 shadow-sm">
            <table class="table table-hover mb-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th class="px-4 py-3">Nama Anggota</th>
                        <th class="py-3">Jumlah Bayar</th>
                        <th class="py-3">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $angsuran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-4 py-3"><?php echo e($item['nama_anggota']); ?></td>
                        <td class="py-3 fw-bold text-success">Rp <?php echo e(number_format($item['jumlah_bayar'], 0, ',', '.')); ?></td>
                        <td class="py-3"><?php echo e($item['tanggal']); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html> <?php /**PATH C:\laragon\www\simpan_pinjam\resources\views/angsuran/index.blade.php ENDPATH**/ ?>