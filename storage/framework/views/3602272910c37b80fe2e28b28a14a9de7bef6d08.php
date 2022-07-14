

<?php $__env->startSection('content'); ?>
<section><br>
    <div class="mb-4">
        <span class="fs-3 border-1 border-bottom pb-2 pe-3">Create Customer</span>
    </div>

    <a href="/customer" class="btn btn-secondary btn-lg mb-3" title="back">Kembali</a>
<div class="container-fluid">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <form action="<?php echo e(route('customer.update',$customer->id)); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?>
						<div class="mb-3">
							<label class="">Name :</label>
							<input type="text" name="nameCustomer" value="<?php echo e($customer->nameCustomer); ?>" class="form-control">
						</div>
						<div class="mb-3">
							<label class="">Email :</label>
							<input type="email" name="emailCustomer" value="<?php echo e($customer->emailCustomer); ?>" class="form-control">
						</div>
						<div class="mb-3">
							<label class="">Phone :</label>
							<input type="text" name="phoneCustomer" value="<?php echo e($customer->phoneCustomer); ?>" class="form-control">
						</div>
						<div class="mb-3">
							<div class="">
								<input type="checkbox" name="member" value="<?php echo e($customer->member ? 'checked' : ''); ?>" class="form-check-input">
								<label class="form-lab">Member</label>
							</div>
						</div>

						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\belajar-laravel\resources\views/customer/edit.blade.php ENDPATH**/ ?>