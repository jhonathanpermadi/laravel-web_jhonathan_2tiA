<?php $__env->startSection('content'); ?>
    

    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Pelanggan</a>
                </li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Data Pelanggan</h1>
                <p class="mb-0">List data seluruh pelanggan</p>
            </div>

            <div>
                <a href="<?php echo e(route('pelanggan.create')); ?>" class="btn btn-success">
                    Tambah Pelanggan
                </a>
            </div>
        </div>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    

                    
                    <form action="<?php echo e(route('pelanggan.index')); ?>" method="GET" class="mb-4">
                        <div class="row align-items-end">

                            
                            <div class="col-md-3 mb-3">
                                <label for="gender" class="form-label">
                                    Filter Gender
                                </label>

                                <select name="gender" id="gender" class="form-select">
                                    <option value="">Semua Gender</option>

                                    <option value="Male" <?php echo e(request('gender') == 'Male' ? 'selected' : ''); ?>>
                                        Male
                                    </option>

                                    <option value="Female" <?php echo e(request('gender') == 'Female' ? 'selected' : ''); ?>>
                                        Female
                                    </option>

                                    <option value="Other" <?php echo e(request('gender') == 'Other' ? 'selected' : ''); ?>>
                                        Other
                                    </option>
                                </select>
                            </div>

                            

                            
                            <div class="col-md-3 mb-3">
                                <label for="search" class="form-label">
                                    Search
                                </label>

                                <div class="input-group">

                                    <input type="text" name="search" class="form-control" id="search"
                                        value="<?php echo e(request('search')); ?>" placeholder="Search" aria-label="Search">

                                    
                                    <button type="submit" class="input-group-text" aria-label="Cari pelanggan">
                                        <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </button>

                                    
                                    <?php if(request('search')): ?>
                                        <a href="<?php echo e(request()->fullUrlWithQuery(['search' => null])); ?>"
                                            class="input-group-text text-danger" title="Hapus pencarian"
                                            aria-label="Hapus pencarian">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>

                            
                            <div class="col-md-3 mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Filter
                                </button>

                                <a href="<?php echo e(route('pelanggan.index')); ?>" class="btn btn-secondary">
                                    Reset
                                </a>
                            </div>

                        </div>
                    </form>


                    
                    <div class="table-responsive">
                        <table id="table-pelanggan" class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0">No</th>
                                    <th class="border-0">First Name</th>
                                    <th class="border-0">Last Name</th>
                                    <th class="border-0">Birthday</th>
                                    <th class="border-0">Gender</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Phone</th>
                                    <th class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $dataPelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <?php echo e(($dataPelanggan->currentPage() - 1) * $dataPelanggan->perPage() + $loop->iteration); ?>

                                        </td>

                                        <td><?php echo e($item->first_name); ?></td>
                                        <td><?php echo e($item->last_name); ?></td>
                                        <td><?php echo e($item->birthday); ?></td>
                                        <td><?php echo e($item->gender); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->phone); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('pelanggan.edit', $item->pelanggan_id)); ?>"
                                                class="btn btn-sm btn-warning">
                                                Edit
                                            </a>

                                            <form action="<?php echo e(route('pelanggan.destroy', $item->pelanggan_id)); ?>"
                                                method="POST" style="display:inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            Tidak ada data pelanggan.
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    
                    <div class="mt-3">
                        <?php echo e($dataPelanggan->links('pagination::bootstrap-5')); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\laravel-web\resources\views/admin/pelanggan/index.blade.php ENDPATH**/ ?>