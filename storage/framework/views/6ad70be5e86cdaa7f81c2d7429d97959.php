<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Data Mahasiswa - Sistem Informasi Mahasiswa PCR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Data Mahasiswa - Sistem Informasi Mahasiswa PCR">
    <meta name="author" content="Politeknik Caltex Riau">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('assets-admin/img/favicon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets-admin/img/favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets-admin/img/favicon/favicon-16x16.png')); ?>">

    <!-- Volt CSS -->
    <link type="text/css" href="<?php echo e(asset('assets-admin/css/volt.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Mobile Nav -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="<?php echo e(route('dashboard')); ?>">
            <img class="navbar-brand-dark" src="<?php echo e(asset('assets-admin/img/brand/light.svg')); ?>" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="<?php echo e(asset('assets-admin/img/team/profile-picture-3.jpg')); ?>" class="card-img-top rounded-circle border-white" alt="Admin">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Admin</h2>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets-admin/img/brand/light.svg')); ?>" height="20" width="20" alt="Volt Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">SIM Mahasiswa PCR</span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(request()->is('dashboard*') || request()->is('admin/dashboard*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(request()->is('mahasiswa*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Data Mahasiswa</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-secondary text-dark px-3 py-2">
                            <strong>Program Studi:</strong> Teknik Informatika - Politeknik Caltex Riau
                        </span>
                    </div>
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Admin Image" src="<?php echo e(asset('assets-admin/img/team/profile-picture-3.jpg')); ?>">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">Admin TI PCR</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Header & Breadcrumb -->
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Data Mahasiswa</h1>
                    <p class="mb-0">Pengelolaan data mahasiswa Program Studi Teknik Informatika Politeknik Caltex Riau</p>
                </div>
                <div>
                    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary d-inline-flex align-items-center">
                        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Tambah Mahasiswa
                    </a>
                </div>
            </div>
        </div>

        <!-- Flash Message -->
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span>
                <strong>Sukses!</strong> <?php echo e(session('success')); ?>

                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Table Card -->
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-hover table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">No</th>
                                <th class="border-0">NIM</th>
                                <th class="border-0">Nama Lengkap</th>
                                <th class="border-0">Program Studi</th>
                                <th class="border-0">Kelas</th>
                                <th class="border-0">L/P</th>
                                <th class="border-0">Email</th>
                                <th class="border-0">No. Telepon</th>
                                <th class="border-0">Alamat</th>
                                <th class="border-0 text-center rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="fw-bold"><?php echo e($index + 1); ?></td>
                                    <td><span class="badge bg-primary text-white"><?php echo e($item->nim); ?></span></td>
                                    <td class="fw-bold"><?php echo e($item->nama_lengkap); ?></td>
                                    <td><?php echo e($item->program_studi); ?></td>
                                    <td><?php echo e($item->kelas); ?></td>
                                    <td>
                                        <?php if($item->jenis_kelamin == 'Laki-laki'): ?>
                                            <span class="badge bg-info text-dark">Laki-laki</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning text-dark">Perempuan</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->nomor_telepon); ?></td>
                                    <td><?php echo e($item->alamat ? Str::limit($item->alamat, 25) : '-'); ?></td>
                                    ```blade
<td class="text-center">
    <a href="<?php echo e(route('mahasiswa.edit', $item->id)); ?>"
       class="btn btn-sm btn-info text-white me-1" title="Edit">
        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2"
                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
            </path>
        </svg>
        Edit
    </a>

    
    <a href="<?php echo e(route('mahasiswa.cv', $item->id)); ?>"
       target="_blank"
       class="btn btn-sm btn-success me-1"
       title="Overview CV">
        Overview CV
    </a>

    
    <form action="<?php echo e(route('mahasiswa.destroy', $item->id)); ?>"
          method="POST" style="display:inline;"
          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                </path>
            </svg>
            Hapus
        </button>
    </form>
</td>


                                        <form action="<?php echo e(route('mahasiswa.destroy', $item->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                                <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="10" class="text-center py-5 text-muted">
                                        <div class="mb-2">
                                            <svg class="icon icon-xl text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                            </svg>
                                        </div>
                                        <h6 class="fw-bold">Belum ada data mahasiswa</h6>
                                        <p class="mb-3 font-small">Silakan tambahkan data mahasiswa baru dengan menekan tombol di bawah ini.</p>
                                        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-sm btn-primary">
                                            + Tambah Mahasiswa Sekarang
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white rounded shadow p-4 mb-4 mt-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <p class="mb-0 text-muted font-small">
                        &copy; 2026 <strong>Teknik Informatika</strong> - Politeknik Caltex Riau (UTS Praktikum Laravel)
                    </p>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <span class="font-small text-muted">Template: Volt Pro Bootstrap 5</span>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core JS -->
    <script src="<?php echo e(asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-admin/js/volt.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laragon-6.0-minimal\www\able-pro-free-admin-dashboard-template-v\resources\views/admin/mahasiswa/index.blade.php ENDPATH**/ ?>