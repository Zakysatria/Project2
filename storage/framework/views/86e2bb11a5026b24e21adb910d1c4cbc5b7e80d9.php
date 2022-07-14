

<?php $__env->startSection('content'); ?>
<section>
    <div class="mt-3">
        <h1>Tambah Menu</h1>
    </div>

    <a href="/menu" class="btn my-3 btn-secondary text-white fw-bold btn-sm">
        <span data-feather="chevron-left">Kembali</>
    </a>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card card-body">
                <form action="/menu" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Name</label>
                        <input value="<?php echo e(old('nameMenu')); ?>" required name="nameMenu" type="text" required placeholder="Name" class="form-control" id="floatingInput">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea2">Description</label>
                        <textarea class="form-control" required value="<?php echo e(old('descMenu')); ?>" name="descMenu" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Menu Photo</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input name="photoMenu" type="file" class="form-control" id="image" name="image" onchange="previewImage()">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Price</label>
                        <input value="<?php echo e(old('price')); ?>" name="price" type="number" placeholder="Name" class="form-control" id="floatingInput">
                    </div>
                    <div class="input-group">
                        <button class="btn btn-success rounded me-1" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
    <script>
        // preview image
        function previewImage(){
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector(".img-preview");

            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFEvent) {
                imgPreview.src = oFEvent.target.result;
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\belajar-laravel\resources\views/menu/create.blade.php ENDPATH**/ ?>