
<?php $__env->startSection('content'); ?>

    <head>
        <style>
            .dz-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        </style>
        <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/quill/quill.snow.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/quill/quill.bubble.css')); ?>">
    </head>
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
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن محصول</h1>
        </div>

        <?php if($errors->any()): ?>
            <div class="row alert alert-danger svg-danger d-flex align-items-center" role="alert">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-3 d-flex">
                        <svg class="flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            height="1.5rem" viewbox="0 0 24 24" width="1.5rem" fill="#000000">
                            <g>
                                <rect fill="none" height="24" width="24"></rect>
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z">
                                        </path>
                                        <rect height="6" width="2" x="11" y="7"></rect>
                                        <rect height="2" width="2" x="11" y="15"></rect>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div>
                            <?php echo e($error); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action = "<?php echo e(route('productEdit.post', [$product])); ?>" id="Qform" method="Post"
        enctype="multipart/form-data">
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
                                                <input value="<?php echo e($product->name); ?>" name="name" type="text"
                                                    class="form-control" id="product-name-add" placeholder="نام">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*نام محصول نباید
                                                    بیشتر از ۳۰ کاراکتر باشد</label>
                                            </div>
                                            <div class="form-text text-danger">
                                                <?php $__errorArgs = ['name'];
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
                                            <div class="col-xl-6">
                                                <label for="brand" class="form-label">برند</label>
                                                <select class="form-control" data-trigger="" name="brand"
                                                    id="product-brand-add">
                                                    <option value="">انتخاب کنید</option>
                                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($brand->id); ?>"
                                                            <?php echo e($brand->id == $product->brand_id ? 'selected' : ''); ?>>
                                                            <?php echo e($brand->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="category" class="form-label">دسته‌بندی</label>
                                                <select class="form-control" data-trigger="" name="category"
                                                    id="product-category-add">
                                                    <option value="">دسته‌بندی</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>"
                                                            <?php echo e($category->id == $product->category_id ? 'selected' : ''); ?>>
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
                                                                <?php echo e($product->Inventory > 0 ? 'selected' : ''); ?>>موجود
                                                            </option>
                                                            <option value="0"
                                                                <?php echo e($product->Inventory <= 0 ? 'selected' : ''); ?>>ناموجود
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xxl-4 d-none" id="number-inv">
                                                        <input class="form-control" value="<?php echo e($product->Inventory); ?>"
                                                            type="text" placeholder="تعداد" name="number_inv">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="public" class="form-label">وضعیت انتشار</label>
                                                            <select class="form-control" data-trigger="" name="public"
                                                                id="product-status-add">
                                                                <option value="">انتخاب کنید</option>
                                                                <option value="1"
                                                                    <?php echo e(1 == $product->public ? 'selected' : ''); ?>>عمومی
                                                                </option>
                                                                <option value="0"
                                                                    <?php echo e(0 == $product->public ? 'selected' : ''); ?>>غیر قابل
                                                                    نمایش</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12 mb-3">
                                                            <label for="product-cost-add" class="form-label">قیمت
                                                                پایه</label>
                                                            <input value="<?php echo e($product->price); ?>" name="price"
                                                                type="text" class="form-control" id="product-cost-add"
                                                                placeholder="قیمت">
                                                            <label for="product-cost-add"
                                                                class="form-label mt-1 fs-12 fw-normal text-muted mb-0">قیمت
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
                                <div class="col-xl-12">
                                    <label for="product-description-add" class="form-label">توضیحات
                                        محصول</label>
                                    <div style="height: 59%;" id="editor"><?php echo $product->description; ?></div>
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
                            const files = <?php echo json_encode($files, 15, 512) ?>;
                            const imageLable = document.getElementById("imageLable");
                            const uploadUrl = "<?php echo e(route('save_images')); ?>";
                            const csrf = "<?php echo e(csrf_token()); ?>"
                        </script>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">ویرایش محصول<i
                                class="ri-edit-line ms-2"></i></button>
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

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\shop-app\resources\views/products/product_edit.blade.php ENDPATH**/ ?>