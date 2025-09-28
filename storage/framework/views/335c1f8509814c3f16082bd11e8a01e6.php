<?php $__env->startSection('content'); ?>
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">برنامه ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن مقاله</h1>
        </div>
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action="<?php echo e(route('add_post.post')); ?>" method="Post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4 mt-3">
                            <!-- فرم ورود اطلاعات -->
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="mb-3">
                                                <label class="label-form" for="image">تصویر مقاله</label>
                                                <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" id="image">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">نام مقاله</label>
                                                <input value="<?php echo e(old('title')); ?>" name="title" type="text"
                                                    class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="post-name-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">دسته بندی مقاله</label>
                                                <select name="category_id" id="" class="form-select">
                                                    <option value="">انتخاب کنید</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-text text-danger">
                                                <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="formFile" class="form-label">متن مقاله</label>
                                                <textarea class="form-control <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="5" name="body"><?php echo e(old('body')); ?></textarea>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="mb-2 mt-3" id="divImage" style="height: 350px">
                                    <img type="image" class="w-100 h-100 rounded"
                                        src="<?php echo e(asset('images/default.post.png')); ?>" alt="p-image" id="p-image">
                                    <p id="post-name" class="text-secondary fw-bold mt-2 fs-6" style="text-align: center">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">
                            افزودن مقاله<i class="bi bi-plus-lg ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        const image = document.getElementById('image')
        const div = document.getElementById('divImage')
        const pImage = document.getElementById('p-image')
        const nameInput = document.getElementById('post-name-input')
        const nameP = document.getElementById('post-name')
        image.addEventListener("change", function(event) {
            const file = event.target.files[0]
            if (file) {
                const reader = new FileReader()
                reader.onload = function(e) {
                    pImage.src = e.target.result
                }
                reader.readAsDataURL(file)
            } else {
                pImage.src = "<?php echo e(asset('images/default-category.png')); ?>"
            }
        })
        nameInput.addEventListener("input", function() {
            nameP.textContent = nameInput.value
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/posts/add.blade.php ENDPATH**/ ?>