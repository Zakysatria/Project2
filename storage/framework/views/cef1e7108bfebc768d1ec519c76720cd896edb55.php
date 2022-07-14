

<?php $__env->startSection('content'); ?>
<section><br>
    <div class="mb-5">
        <h3 class="fs-3 border-1 border-bottom pb-2 pe-3">Halaman Customer</h3>
    </div>
    <div>
        <a href="<?php echo e(route('customer.create')); ?>">
          <button class="btn btn-primary" type="button" style="border-radius: 7px;">Tambah data</button>
        </a>
    </div>
    <?php if(session('success')): ?>
        <p class="text-success"><?php echo e(session('success')); ?></p>
    <?php endif; ?>
    <div class="card">
    <div class="row">
        <div class="col-10">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($customer->nameCustomer); ?></td>
                        <td>
                        <form action="<?php echo e(route('customer.destroy',$customer->id)); ?>" method="POST">
                                                <a href="<?php echo e(route('customer.edit',$customer->id)); ?>" class="fas text-white me-1 fa-edit btn btn-warning btn-sm fs-6 fw-bold">
                                                    Edit
                                                </a>

                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
      
                                                <button type="submit" class="fas ms-1 fa-trash btn btn-danger btn-sm fs-6 fw-bold">Hapus</button>
                                                </a>
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\belajar-laravel\resources\views/customer/index.blade.php ENDPATH**/ ?>