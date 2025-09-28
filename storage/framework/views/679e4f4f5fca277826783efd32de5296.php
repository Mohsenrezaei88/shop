<?php $__env->startSection('content'); ?>

    <head>
        <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/quill/quill.snow.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/quill/quill.bubble.css')); ?>">
    </head>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">محصولات</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($product->name); ?></li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">جزئیات محصولات</h1>
        </div>
    </div>
    <?php if(!$product->attributes->count() > 0): ?>
        <script>
            window.location.replace('<?php echo e(route('index')); ?>')
        </script>
    <?php endif; ?>
    <div class="row">
        <!-- تصویر محصول -->
        <div class="col-xxl-5">
            <div style="height: 441.91px" class="card custom-card d-flex flex-column">

                <div class="card-body d-flex flex-column flex-grow-1">
                    <a href="<?php echo e(asset($product->images->first()->url)); ?>" class="glightbox card border-0 mb-0"
                        data-gallery="gallery1" data-title="تصویر 1" data-type="image" data-draggable="true">
                        <div class="ecommerce-gallery d-block text-center">
                            <span class="badge bg-primary2 tag-badge">برجسته</span>
                            <img src="<?php echo e(asset($product->images->first()->url)); ?>" alt="image" class="img-fluid"
                                style="max-height:330px; object-fit:contain;">
                            <span class="p-3 py-2 rounded text-fixed-white view-lightbox">مشاهده تصاویر بیشتر</span>
                        </div>
                    </a>

                    <div class="row ad-gallery mt-3">
                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key != 0): ?>
                                <div class="col-xl-3 col-md-4 col-6">
                                    <a href="<?php echo e(asset($image->url)); ?>" class="glightbox card" data-gallery="gallery1"
                                        data-title="تصویر <?php echo e($key + 1); ?>" data-type="image" data-draggable="true">
                                        <img src="<?php echo e(asset($image->url)); ?>" alt="image" class="img-fluid"
                                            style="max-height:80px; object-fit:cover;">
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php $__env->startPush('scripts'); ?>
                    <script src="<?php echo e(url('../../assets/libs/swiper/swiper-bundle.min.js')); ?>"></script>

                    <!-- Gallery JS -->
                    

                    <!-- Internal Ecommerce Product Details -->
                    <script src="<?php echo e(url('../../assets/js/ecommerce-product-details.js')); ?>"></script>
                <?php $__env->stopPush(); ?>
                <div class="card-footer">
                    <form action="<?php echo e(route('add_cart', [$product])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if($product->Inventory > 0): ?>
                            <div
                                class="card-footer text-center d-flex gap-2 flex-wrap justify-content-center w-100 mt-auto">
                                <button type="submit" href="cart.html" class="btn btn-primary1 btn-w-lg w-100">
                                    <i class="bx bx-cart-add fs-16 align-middle"></i> افزودن به سبد خرید
                                </button>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- جزئیات محصول -->
        <div class="col-xxl-7">
            <div class="card custom-card">
                <div style="height: 441.91px" class="card-body d-flex">
                    <div class="">
                        <p class="fs-20 fw-semibold mt-3 mb-5"><?php echo e($product->name); ?></p>
                        <hr>
                        <div class="mt-5">
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <?php if($product->Inventory > 0): ?>
                                    <p class="mb-1">
                                        <span id="productPrice" class="h4 fw-semibold"
                                            data-base-price="<?php echo e($product->price); ?>">
                                            <?php echo e(number_format($product->price)); ?>

                                        </span> تومان
                                    </p>
                                <?php else: ?>
                                    <p class="mb-1">
                                        <span id="productPrice" class="h3 fw-semibold text-danger"
                                            data-base-price="<?php echo e($product->price); ?>">
                                            ناموجود
                                        </span>
                                    </p>
                                <?php endif; ?>
                            </div>

                            <!-- سایر ویژگی‌ها -->
                            <?php if($product->Inventory > 0): ?>
                                <?php if($otherAttributes->count() > 0): ?>
                                    <div class="d-flex gap-4 align-items-center mb-3 justify-content-between flex-wrap">
                                        <?php $__currentLoopData = $otherAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $attrs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="d-flex gap-3 align-items-center">
                                                <p class="fs-13 fw-semibold mb-1" style="color: #999ca3">
                                                    <?php echo e($name); ?>:</p>
                                                <?php $__currentLoopData = $attrs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="btn btn-light btn-sm attr-btn <?php echo e($index === 0 ? 'btn-primary' : ''); ?>"
                                                        data-price="<?php echo e($attr->price); ?>" data-name="<?php echo e($name); ?>">
                                                        <?php echo e($attr->value); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <input type="hidden" id="selected-<?php echo e($name); ?>"
                                                    name="attributes[<?php echo e($name); ?>]"
                                                    value="<?php echo e($attrs->first()->value); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="d-flex gap-2 align-items-center my-4">
                                    <?php if($product->Inventory > 0): ?>
                                        <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12">
                                            <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> موجود
                                            در
                                            انبار
                                        </p>
                                    <?php endif; ?>
                                    <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12">
                                        <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> تضمین کیفیت
                                    </p>
                                    <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12">
                                        <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> بازگشت آسان
                                    </p>
                                </div>
                                <div class="d-flex gap-5 align-items-center mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <p class="fs-13 fw-semibold mb-1" style="color: #999ca3">مقدار :</p>
                                        <style>
                                            /* حذف فلش‌های عدد */
                                            input[type=number]::-webkit-inner-spin-button,
                                            input[type=number]::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            input[type=number] {
                                                -moz-appearance: textfield;
                                            }
                                        </style>

                                        <div class="product-quantity-container ecommerce-page-quantity">
                                            <div class="input-group rounded flex-nowrap gap-1">
                                                <!-- دکمه منفی -->
                                                <a href="#"
                                                    class="btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-minus waves-effect waves-light">
                                                    <i class="ri-subtract-line m-0 fs-16 quantity-icon lh-1"></i>
                                                </a>

                                                <!-- اینپوت عدد -->
                                                <input name="number" type="number" min="1"
                                                    class="form-control form-control-sm text-center w-100 rounded-pill"
                                                    aria-label="quantity" id="product-quantity" value="1">

                                                <!-- دکمه مثبت -->
                                                <a href="#"
                                                    class="btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-plus waves-effect waves-light">
                                                    <i class="ri-add-line m-0 fs-16 quantity-icon lh-1"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <script>
                                            const quantityInput = document.getElementById('product-quantity');
                                            const btnMinus = document.querySelector('.product-quantity-minus');
                                            const btnPlus = document.querySelector('.product-quantity-plus');

                                            // دکمه منفی
                                            btnMinus.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                let value = parseInt(quantityInput.value) || 1;
                                                if (value > 1) {
                                                    quantityInput.value = value - 1;
                                                }
                                            });

                                            // دکمه مثبت
                                            btnPlus.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                let value = parseInt(quantityInput.value) || 1;
                                                quantityInput.value = value + 1;
                                            });

                                            // جلوگیری از مقدار کمتر از 1 یا خالی
                                            quantityInput.addEventListener('input', function() {
                                                if (this.value === "" || this.value < 1) {
                                                    this.value = 1;
                                                }
                                            });
                                        </script>

                                    </div>
                                </div>
                                <!-- رنگ‌ها -->
                                <?php if($colors->count() > 0): ?>
                                    <div class="d-flex gap-2 align-items-center mb-4">
                                        <p class="fs-13 fw-semibold mb-0" style="color: #999ca3">رنگ ها :</p>
                                        <p class="mb-0 d-flex align-items-center">
                                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="color-wrapper <?php echo e($index === 0 ? 'selected' : ''); ?>"
                                                    data-color="<?php echo e($color->value); ?>" data-price="<?php echo e($color->price); ?>"
                                                    style="display:inline-block; padding:2px; border-radius:50%; margin-right:6px;
                                                 border:2px solid <?php echo e($index === 0 ? $color->value : 'transparent'); ?>;
                                                 cursor:pointer; transition:transform 0.15s;">
                                                    <span class="product-color"
                                                        style="background-color: <?php echo e($color->value); ?>;
                                                     display:block; width:16px; height:16px; border-radius:50%;">
                                                    </span>
                                                </span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                        <input type="hidden" id="selectedColor" name="selected_color"
                                            value="<?php echo e($colors->first()->value); ?>">
                                    </div>
                                    </form>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="col-xxl-8">
            <div class="card custom-card">
                <div class="card-header">
                    <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-2" id="myTab4" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bg-primary-transparent px-4 active" id="product-details"
                                data-bs-toggle="tab" data-bs-target="#product-details-pane" type="button"
                                role="tab" aria-controls="product-details-pane" aria-selected="true">جزئیات
                                محصول</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bg-primary-transparent px-4" id="key-features-tab"
                                data-bs-toggle="tab" data-bs-target="#key-features-tab-pane" type="button"
                                role="tab" aria-controls="key-features-tab-pane" aria-selected="false"
                                tabindex="-1">توضیحات
                                محصول</button>
                        </li>
                    </ul>

                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane overflow-hidden active p-0 border-0" id="product-details-pane" role="tabpanel"
                        aria-labelledby="product-details" tabindex="0">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <tbody>
                                    <?php $__currentLoopData = $grouped; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($name != 'رنگ'): ?>
                                            <tr>
                                                <th scope="row" class="fw-semibold"><?php echo e($name); ?></th>
                                                <td><?php echo e($items->pluck('value')->implode(' , ')); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="tab-pane show overflow-hidden p-0 border-0" id="key-features-tab-pane" role="tabpanel"
                        aria-labelledby="key-features-tab" tabindex="1">
                        <ul class="mb-0 ps-0">
                            <?php echo $product->description; ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="card custom-card overflow-hidden">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        محصولات مشابه
                    </div>
                    
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <?php $__currentLoopData = $similar_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similar_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($similar_product->id != $product->id): ?>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-top">
                                                        <div class="similar-products-image me-2">
                                                            <img src="<?php echo e(asset($similar_product->images->first()->url)); ?>"
                                                                alt="" class="">
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p
                                                                class="mb-1 fs-14 fw-semibold similar-product-name text-truncate">
                                                                <?php echo e($similar_product->name); ?></p>
                                                            <p><?php echo e($similar_product->brand->name); ?></p>
                                                        </div>
                                                        <div class="ms-auto align-self-center">
                                                            <button
                                                                onclick="window.location='<?php echo e(route('productDetails', [$similar_product])); ?>'"
                                                                href="<?php echo e(route('productDetails', [$similar_product])); ?>"
                                                                class="btn btn-primary w-100">مشاهده محصول</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($similar_products->count() == 1): ?>
                                    <h6 class="text-center mt-3">موردی یافت نشد</h6>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php if($product->Inventory > 0): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const basePrice = parseInt(document.getElementById('productPrice').dataset.basePrice);
                const priceElement = document.getElementById('productPrice');

                const colorWrappers = document.querySelectorAll('.color-wrapper');
                const attrBtns = document.querySelectorAll('.attr-btn');
                const hiddenColor = document.getElementById('selectedColor');

                function animatePrice(current, target) {
                    const duration = 200; // خیلی سریع
                    const frameRate = 60;
                    const totalFrames = Math.round((duration / 1000) * frameRate);
                    const increment = (target - current) / totalFrames;
                    let frame = 0;

                    const counter = setInterval(() => {
                        frame++;
                        current += increment;
                        if (frame >= totalFrames) {
                            current = target;
                            clearInterval(counter);
                        }
                        priceElement.innerText = Math.round(current).toLocaleString();
                    }, duration / totalFrames);
                }

                function updatePrice() {
                    let extras = 0;
                    const selectedColor = document.querySelector('.color-wrapper.selected');
                    if (selectedColor) extras += parseInt(selectedColor.dataset.price || 0);

                    attrBtns.forEach(btn => {
                        if (btn.classList.contains('btn-primary')) extras += parseInt(btn.dataset.price || 0);
                    });

                    const finalPrice = basePrice + extras;
                    animatePrice(parseInt(priceElement.innerText.replace(/,/g, '')), finalPrice);
                }

                // رنگ‌ها
                colorWrappers.forEach(wrapper => {
                    wrapper.addEventListener('click', function() {
                        colorWrappers.forEach(w => w.classList.remove('selected'));
                        this.classList.add('selected');
                        colorWrappers.forEach(w => {
                            w.style.border = w.classList.contains('selected') ?
                                `2px solid ${w.dataset.color}` : '2px solid transparent';
                        });
                        hiddenColor.value = this.dataset.color;
                        updatePrice();
                    });

                    wrapper.addEventListener('mouseenter', () => wrapper.style.transform = 'scale(1.1)');
                    wrapper.addEventListener('mouseleave', () => wrapper.style.transform = 'scale(1)');
                });

                // سایر ویژگی‌ها
                attrBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const name = this.dataset.name;
                        document.querySelectorAll(`.attr-btn[data-name="${name}"]`).forEach(b => b
                            .classList.remove('btn-primary'));
                        this.classList.add('btn-primary');
                        const hiddenInput = document.getElementById(`selected-${name}`);
                        if (hiddenInput) hiddenInput.value = this.innerText;
                        updatePrice();
                    });
                });

                updatePrice(); // مقدار اولیه قیمت
            });
        </script>
    <?php endif; ?>
    <style>
        .color-wrapper {
            display: inline-block;
            padding: 2px;
            border-radius: 50%;
            cursor: pointer;
            margin-right: 6px;
            transition: transform 0.15s;
        }

        .color-wrapper:hover {
            transform: scale(1.1);
        }

        .product-color {
            display: block;
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }

        .color-wrapper.selected {
            border-width: 2px;
            border-style: solid;
        }

        .attr-btn {
            transition: transform 0.15s;
        }

        .attr-btn:hover {
            transform: scale(1.05);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/products/product_details.blade.php ENDPATH**/ ?>