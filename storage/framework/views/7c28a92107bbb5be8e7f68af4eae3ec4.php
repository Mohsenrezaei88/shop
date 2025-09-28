<?php $__env->startSection('content'); ?>

    <head>
        <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/quill/quill.snow.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/quill/quill.bubble.css')); ?>">
    </head>
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">خانه</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('producsList')); ?>">محصولات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن محصول</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action = "<?php echo e(route('add_product.post')); ?>" method="Post" id="Qform" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4">
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">نام محصول</label>
                                                <input value="<?php echo e(old('name')); ?>" name="name" type="text"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="product-name-add" placeholder="نام">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*نام محصول نباید
                                                    بیشتر از ۳۰ کاراکتر باشد</label>
                                            </div>
                                            <div class="form-text text-danger">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="brand" class="form-label">برند</label>
                                                <select class="form-control <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    data-trigger="" name="brand" id="product-brand-add">
                                                    <option value="">انتخاب کنید</option>
                                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($brand->id); ?>"
                                                            <?php echo e($brand->id == old('brand') ? 'selected' : ''); ?>>
                                                            <?php echo e($brand->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="category" class="form-label">دسته‌بندی</label>
                                                <select class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    data-trigger="" name="category" id="product-category-add">
                                                    <option value="">دسته‌بندی</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>"
                                                            <?php echo e($category->id == old('category') ? 'selected' : ''); ?>>
                                                            <?php echo e($category->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="Inventory" class="form-label">وضعیت موجودی</label>
                                                <div class="row">
                                                    <div class="" id="select-inv">
                                                        <select class="form-control" data-trigger="" name="Inventory"
                                                            id="product-inv">
                                                            <option value="">انتخاب کنید</option>
                                                            <option value="1"
                                                                <?php echo e(1 == old('Inventory') ? 'selected' : ''); ?>>موجود
                                                            </option>
                                                            <option value="0"
                                                                <?php echo e('0' === old('Inventory') ? 'selected' : ''); ?>>ناموجود
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xxl-4 d-none" id="number-inv">
                                                        <input
                                                            class="form-control <?php $__errorArgs = ['number_inv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            value="<?php echo e(old('number_inv')); ?>" type="text"
                                                            placeholder="تعداد" name="number_inv">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="public" class="form-label">وضعیت انتشار</label>
                                                            <select class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                data-trigger="" name="public" id="product-status-add">
                                                                <option value="">انتخاب کنید</option>
                                                                <option value="1"
                                                                    <?php echo e(1 == old('public') ? 'selected' : ''); ?>>عمومی
                                                                </option>
                                                                <option value="0"
                                                                    <?php echo e('0' === old('public') ? 'selected' : ''); ?>>غیر قابل
                                                                    نمایش</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-cost-add" class="form-label">قیمت
                                                                پایه</label>
                                                            <input value="<?php echo e(old('price')); ?>" name="price"
                                                                type="text"
                                                                class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                id="product-cost-add" placeholder="قیمت">
                                                            <label for="product-cost-add"
                                                                class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*قیمت
                                                                محصول بدون در نطر
                                                                گرفتن ویژگی ها را وارد کنید</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="mb-3">
                                    <div class="col-xl-12">
                                        <label for="product-description-add" class="form-label">توضیحات
                                            محصول</label>
                                        <div style="height: 59%;" id="editor"></div>
                                        <input type="hidden" name="description" id="Qinput">
                                        <label for="product-description-add"
                                            class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*توضیحات نباید
                                            بیشتر از ۵۰۰ حرف باشد</label>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label my-3">تصاویر محصول</label>
                            <div id="my-dropzone" class="dropzone"></div>
                            <label for="my-dropzone" class="form-label mt-1 fs-12 fw-normal text-muted mb-0"
                                id="imageLable">*حداقل 2 فایل باید اضافه شود</label>
                            <script>
                                const deleteUrl = "<?php echo e(route('delete_image')); ?>";
                                const imageLable = document.getElementById("imageLable")
                                const uploadUrl = "<?php echo e(route('save_images')); ?>";
                                const csrf = "<?php echo e(csrf_token()); ?>"
                            </script>
                        </div>
                        <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                            <button type="submit" class="btn btn-primary1 me-2 mb-2 mb-sm-0">افزودن محصول<i
                                    class="bi bi-plus-lg ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(url('../../assets/libs/quill/quill.js')); ?>"></script>
        <script src="<?php echo e(url('../../assets/js/quill-editor.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
    <script>
        const select = document.getElementById('product-inv')
        const selectDiv = document.getElementById('select-inv')
        const numberDiv = document.getElementById('number-inv')
        select.addEventListener("change", function() {
            if (select.value == 1) {
                selectDiv.classList.add('col-xl-8')
                numberDiv.classList.remove('d-none')
            } else {
                selectDiv.classList.remove('col-xl-8')
                numberDiv.classList.add('d-none')
            }
        })
        if (select.value == 1) {
            selectDiv.classList.add('col-xl-8')
            numberDiv.classList.remove('d-none')
        } else {
            selectDiv.classList.remove('col-xl-8')
            numberDiv.classList.add('d-none')
        }
    </script>
    <script src="<?php echo e(asset('assets/libs/dropzone/dropzone-min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fileupload.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/admin/add_prodect.blade.php ENDPATH**/ ?>