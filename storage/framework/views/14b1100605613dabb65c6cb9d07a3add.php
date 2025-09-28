<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">برنامه‌ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">سبد خرید</h1>
        </div>

    </div>

    <!-- Page Header Close -->

    <!-- Start:: Row-1 -->
    <div class="row">
        <?php if(count($products) > 0): ?>
            <div class="col-xl-9">
                <div class="card custom-card overflow-hidden" id="cart-container-delete">
                    <div class="card-header">
                        <div class="card-title">
                            اقلام سبد خرید
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            نام محصول
                                        </th>
                                        <th>
                                            قیمت
                                        </th>
                                        <th>
                                            تعداد
                                        </th>
                                        <th>
                                            مجموع
                                        </th>
                                        <th>
                                            عملیات
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $total_price = 0;
                                    ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="cart-items01">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-xxl bg-light">
                                                            <img src="<?php echo e(asset($product->product->images->first()->url)); ?>"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <div class="mb-1 fs-14 fw-semibold">
                                                            <a href="javascript:void(0);"><?php echo e($product->product->name); ?><span
                                                                    class="badge bg-primary3 fs-9"></a>
                                                        </div>
                                                        <div class="d-flex gap-4 flex-wrap mb-1 align-items-center">
                                                            <div class="align-items-center gap-1 my-2" style="width: 200px;">
                                                                <div class="row">
                                                                <?php $__currentLoopData = json_decode($product->attributes); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="col-12 d-flex align-items-center mb-2">
                                                                        <span class="me-1"><?php echo e($key); ?> : </span>
                                                                        <?php if($key != 'رنگ'): ?>
                                                                            <span
                                                                                class="fw-medium text-muted"><?php echo e($value); ?></span>
                                                                            <input type="hidden"
                                                                                name="attributes[<?php echo e($key); ?>]"
                                                                                value="<?php echo e($value); ?>">
                                                                        <?php else: ?>
                                                                            <span
                                                                                class="d-inline-block rounded-circle align-middle"
                                                                                style="background-color: <?php echo e($value); ?>; width: 14px; height: 14px;"></span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if($product->product->Inventory > 0): ?>
                                                            <span class="badge bg-success-transparent">موجود در انبار</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-danger-transparent">اتمام موجودی</span>
                                                        <?php endif; ?>
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <?php if($product->product->Inventory > 0): ?>
                                                    <div class="fw-semibold fs-14">
                                                        <?php echo e(number_format($product->price / $product->number)); ?>

                                                    </div>
                                                <?php else: ?>
                                                    <p class="text-danger fw-medium">نامشخص</p>
                                                <?php endif; ?>
                                            </td>
                                            <td class="product-quantity-container">
                                                <?php if($product->product->Inventory > 0): ?>
                                                    <div class="d-flex gap-5 align-items-center mb-4">
                                                        <div class="d-flex gap-4 align-items-center">
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
                                                                    <a href="<?php echo e(route('des_number', [$product])); ?>"
                                                                        class="mt-4 btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-minus waves-effect waves-light">
                                                                        <i
                                                                            class="ri-subtract-line m-0 fs-16 quantity-icon lh-1"></i>
                                                                    </a>

                                                                    <!-- اینپوت عدد -->
                                                                    <input name="number" disabled type="number"
                                                                        min="1"
                                                                        class="mt-4 form-control form-control-sm text-center w-100 rounded-pill"
                                                                        aria-label="quantity" id="product-quantity"
                                                                        value="<?php echo e($product->number); ?>">

                                                                    <!-- دکمه مثبت -->
                                                                    <a href="<?php echo e(route('add_number', [$product])); ?>"
                                                                        class="mt-4 btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-plus waves-effect waves-light">
                                                                        <i
                                                                            class="ri-add-line m-0 fs-16 quantity-icon lh-1"></i>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            

                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <p class="text-danger fw-medium">نامشخص</p>
                                                <?php endif; ?>


                                            </td>
                                            <td>
                                                <?php if($product->product->Inventory > 0): ?>
                                                    <div class="fs-14 fw-semibold">
                                                        <?php echo e(number_format($product->price)); ?>

                                                        <?php
                                                            $total_price += $product->price;
                                                        ?>
                                                    </div>
                                                <?php else: ?>
                                                    <p class="text-danger fw-medium">نامشخص</p>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('cart_delete', [$product])); ?>"
                                                    class="btn btn-icon btn-primary2 btn-sm btn-delete"
                                                    data-bs-title="حذف از سبد خرید">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        <?php endif; ?>

        <?php if(count($products) == 0): ?>
            <div class="card custom-card" id="cart-empty-cart">
                <div class="card-header">
                    <div class="card-title">
                        سبد خرید خالی است
                    </div>

                </div>
                <div class="card-body">
                    <div class="cart-empty text-center">
                        <span class="svg-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24"
                                viewbox="0 0 24 24">
                                <path
                                    d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z">
                                </path>
                                <path d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z">
                                </path>
                                <path
                                    d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z">
                                </path>
                                <path
                                    d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z">
                                </path>
                            </svg>
                        </span>
                        <h3 class="fw-bold mb-1">سبد خرید شما خالی است</h3>
                        <h5 class="mb-3">برای خوشحال کردن من چند مورد به سبد اضافه کن :)</h5>
                        <a href="<?php echo e(route('index')); ?>" class="btn btn-primary btn-wave m-3" data-abc="true">ادامه خرید
                            <i class="bi bi-arrow-right ms-1"></i></a>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if(count($products) > 0): ?>
        <div class="col-xl-3">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        خلاصه سفارش
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-3 border-bottom border-block-end-dashed">
                        <label for="promo-code" class="fw-medium mb-0">کد تخفیف دارید؟</label>
                        <div class="fs-11 text-muted mb-3">کد تخفیف خود را وارد کنید تا فوری تخفیف بگیرید!</div>
                        <div class="input-group mb-0">
                            <input type="text" class="form-control form-control-sm" id="promo-code" name="promo-code"
                                placeholder="کد تخفیف را وارد کنید" aria-label="کد تخفیف را وارد کنید"
                                aria-describedby="coupons">
                            <button class="btn btn-primary" type="button" id="coupons">اعمال</button>
                        </div>
                    </div>

                </div>
                <div class="p-3 pb-2">
                    <p class="mb-2 fw-semibold">تحویل:</p>
                    <ul class="nav nav-tabs tab-style-8 scaleX rounded cart-summary-nav gap-2" id="myTab4"
                        role="tablist">
                        <?php $__currentLoopData = $shipping_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item flex-fill me-0" role="presentation">
                                <button class="nav-link w-100 <?php echo e($key == 0 ? 'active' : ''); ?>" id="<?php echo e($ship->id); ?>"
                                    data-bs-toggle="tab" data-bs-target="#<?php echo e($ship->id); ?>-pane" type="button"
                                    role="tab" aria-controls="<?php echo e($ship->id); ?>-pane"
                                    aria-selected="true"><?php echo e($ship->name); ?></button>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="p-3 border-bottom border-block-end-dashed tab-content">
                    <?php $__currentLoopData = $shipping_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane show <?php echo e($key == 0 ? 'active' : ''); ?> overflow-hidden p-0 border-0"
                            id="<?php echo e($ship->id); ?>-pane" role="tabpanel" aria-labelledby="<?php echo e($ship->id); ?>"
                            tabindex="0">
                            <div class="fs-12 text-muted mb-3"><i class="ri-information-fill"></i> تحویل تا
                                <?php echo e($ship->time); ?> روز آینده
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">جمع</div>
                                <div class="fw-medium fs-14"><?php echo e(number_format($total_price)); ?></div>
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">هزینه ارسال</div>
                                <div class="fw-medium fs-14"><?php echo e(number_format($ship->price)); ?></div>
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between h5">
                                <div class="fs-16">مبلغ کل :</div>
                                <div class="fw-semibold"><?php echo e(number_format($total_price + $ship->price)); ?></div>
                            </div>
                            <div class="d-grid">
                                <a href="<?php echo e(route('checkout')); ?>" class="btn btn-primary btn-wave mb-2">ادامه برای
                                    پرداخت</a>
                                <a href="<?php echo e(route('index')); ?>" class="btn btn-primary1-light btn-wave">ادامه خرید</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    <?php endif; ?>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/cart/cart.blade.php ENDPATH**/ ?>