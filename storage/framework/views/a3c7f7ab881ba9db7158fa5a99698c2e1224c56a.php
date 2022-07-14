

<?php $__env->startSection('content'); ?>

<section><br>
    <!-- alert menu -->
    <?php if( session()-> has('success') ): ?>
    <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    <?php endif; ?>
    <div class="mt-3">
        <h1>Halaman Menu</h1>
    </div>

    <a href="/menu/create" class="btn my-3 btn-primary btn-sm">
        <h6 data-feather="plus">Tambah data</h6>
    </a>
<div class="card">
    <div class="row">
        <div class="col-10">
            <table class="table table-responsive table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Description</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($menu->nameMenu); ?></td>
                        <td><?php echo e($menu->descMenu); ?></td>
                         
                        <td>
                            <?php if(!$menu->photoMenu): ?>
                            <img style="height: 157px;width: 262px;margin: 0px;margin-top: 0px;margin-left: 45px;" alt="photo menu" src="<?php echo e(asset( "storage/images/defaultmenu.png" )); ?>">
                            <?php else: ?> 
                            <img style="height: 157px;width: 262px;margin: 0px;margin-top: 0px;margin-left: 45px;" alt="photo menu" src="<?php echo e(asset( "storage/". $menu->photoMenu )); ?>">
                            <?php endif; ?> 
                        </td>
                        <td><?php echo e($menu-> price); ?></td>
                        <td>
                            <a href="/menu/<?php echo e($menu->id); ?>/edit" class="btn me-1 text-white btn-sm btn-warning">
                                <span data-feather="edit">Edit</span>
                            </a>
                            <form action="/menu/<?php echo e($menu->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                
                                <button onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm">
                                    <span data-feather="trash-2">Hapus</span>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\belajar-laravel\resources\views/menu/index.blade.php ENDPATH**/ ?>