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
                <a class="nav-link text-white" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
                <a class="nav-link text-white" href="<?php echo e(url('/anggota')); ?>">Data Anggota</a>
                <a class="nav-link active fw-bold" href="<?php echo e(url('/pinjaman')); ?>">Data Pinjaman</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">Manajemen Data Pinjaman</h2>
            <a href="<?php echo e(url('/pinjaman/create')); ?>" class="btn btn-primary shadow-sm fw-bold">+ Tambah Pinjaman</a>
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
                    <?php $__currentLoopData = $pinjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-4"><?php echo e($key + 1); ?></td>
                        <td><?php echo e($item['nama_anggota']); ?></td>
                        <td>Rp <?php echo e(number_format($item['jumlah'], 0, ',', '.')); ?></td>
                        <td><?php echo e($item['bunga']); ?>%</td>
                        <td class="fw-bold text-danger">Rp <?php echo e(number_format($item['total'], 0, ',', '.')); ?></td>
                        <td><?php echo e($item['tanggal']); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\simpan_pinjam\resources\views/pinjaman/index.blade.php ENDPATH**/ ?>