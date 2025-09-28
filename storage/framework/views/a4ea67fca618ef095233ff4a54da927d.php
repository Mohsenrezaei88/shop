<?php $__env->startSection('content'); ?>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <?php if($check == null): ?>
            <script>
                $(document).ready(function() {
                    //    alert($("input[name=shipping_method]").val())
                    $.ajax({
                        url: "<?php echo e(route('total_price')); ?>",
                        type: "POST",
                        data: {
                            _token: "<?php echo e(csrf_token()); ?>",
                            shipping_method: $("input[name = shipping_method]").val()
                        },
                        success: function(result) {
                            $("#total-price").html(result.total_price);
                            $("#shipping-price").html(result.shipping_price)
                        }
                    })
                });

                function price(id) {
                    $.ajax({
                        url: "<?php echo e(route('total_price')); ?>",
                        type: "POST",
                        data: {
                            _token: "<?php echo e(csrf_token()); ?>",
                            shipping_method: id
                        },
                        success: function(result) {
                            $("#total-price").html(result.total_price);
                            $("#shipping-price").html(result.shipping_price)
                        },
                        error: function(response) {
                            console.error(response.responseText)
                        }
                    });
                }
            </script>
        <?php endif; ?>
        <script>
            function getaddress(address) {
                $.ajax({
                    url: "<?php echo e(route('get_address')); ?>",
                    type: "POST",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        address: address
                    },
                    success: function(result) {
                        $("#name-change").val(result.address.name)
                        $('#phonenumber-change').val(result.address.phone)
                        $('#address-change').val(result.address.address)
                        $('#pincode-change').val(result.address.pincode)
                        $('#address-form-change').attr("action", "<?php echo e(route('edit_address', ':address')); ?>".replace(
                            ":address", result.address.id))
                        setCMarker(result.address.lat, result.address.lng)
                        Cmap.panTo([result.address.lat, result.address.lng]);
                    },
                    error: function(response) {
                        console.error(response.responseText)
                    }
                });
            }
        </script>
    </head>
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">برنامه‌ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تسویه حساب</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">تسویه حساب</h1>
        </div>
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
    <!-- Page Header Close -->

    <div class="row">
        <div class="col-xxl-9">
            <div class="card custom-card">
                <div class="card-body product-checkout">
                    <ul class="nav nav-tabs tab-style-8 scaleX d-sm-flex d-block justify-content-around border border-dashed border-bottom-0 bg-light rounded-top"
                        id="myTab1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3 active" id="order-tab" data-bs-toggle="tab"
                                data-bs-target="#order-tab-pane" type="button" role="tab" aria-controls="order-tab"
                                aria-selected="true"><i class="ri-truck-line me-2 align-middle"></i>ارسال</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3" id="confirmed-tab" data-bs-toggle="tab"
                                data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                aria-controls="confirmed-tab" aria-selected="false"><i
                                    class="ri-user-3-line me-2 align-middle"></i>اطلاعات شخصی</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3" id="shipped-tab" data-bs-toggle="tab"
                                data-bs-target="#shipped-tab-pane" type="button" role="tab" aria-controls="shipped-tab"
                                aria-selected="false"><i class="ri-bank-card-line me-2 align-middle"></i>پرداخت</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link p-3" id="delivered-tab" data-bs-toggle="tab"
                                data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                aria-controls="delivered-tab" aria-selected="false"><i
                                    class="ri-checkbox-circle-line me-2 align-middle"></i>تکمیل سفارش</button>
                        </li>
                    </ul>

                    <form action="<?php echo e(route('pay')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="tab-content border border-dashed" id="myTabContent">
                            <!-- Tab 01: ارسال -->
                            <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                aria-labelledby="order-tab" tabindex="0">
                                <div class="p-3">
                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">01</p>
                                    <div class="row gy-3 mb-4">
                                        <p class="fs-15 fw-semibold mb-1">روش های حمل و نقل:</p>
                                        <?php $__currentLoopData = $shipping_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-xl-6">
                                                <div class="form-check shipping-method-container mb-0">
                                                    <input onclick="price(<?php echo e($ship->id); ?>)"
                                                        id="shipping-method<?php echo e($ship->id); ?>" name="shipping_method"
                                                        type="radio" class="form-check-input shipping-radio"
                                                        value="<?php echo e($ship->id); ?>" data-price="<?php echo e($ship->price); ?>"
                                                        <?php if($key == 0): ?> checked <?php endif; ?>>
                                                    <div class="form-check-label">
                                                        <div class="d-sm-flex align-items-center justify-content-between">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="./assets/images/ecommerce/png/21.png"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="shipping-partner-details me-sm-5 me-0">
                                                                <p class="mb-0 fw-semibold"><?php echo e($ship->name); ?></p>
                                                                <p class="text-muted fs-11 mb-0">تحویل تا
                                                                    <?php echo e($ship->time); ?> روز کاری آینده</p>
                                                            </div>
                                                            <div class="fw-semibold me-sm-5 me-0">
                                                                <?php echo e(number_format($ship->price)); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div
                                        class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                        <div>آدرس ارسال :</div>
                                        <div class="mt-sm-0 mt-2">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal-new-address">
                                                <i class="ri-add-line me-1 align-middle fs-14 fw-semibold"></i>افزودن آدرس
                                                جدید
                                            </button>
                                        </div>
                                    </div>

                                    <?php if($addresses->count() > 0): ?>
                                        <div class="row">
                                            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-xl-6">
                                                    <div class="card custom-card card-style-6 border shadow-none mb-xl-0">
                                                        <div class="card-body p-3">
                                                            <div class="d-flex gap-2">
                                                                <input class="form-check-input" type="radio"
                                                                    id="address<?php echo e($address->id); ?>"
                                                                    name="default_address" value="<?php echo e($address->id); ?>"
                                                                    <?php if($key == 0): ?> checked <?php endif; ?>>
                                                                <label class="form-check-label cursor-pointer"
                                                                    for="address<?php echo e($address->id); ?>">تنظیم به‌عنوان
                                                                    پیش‌فرض</label>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between mb-3">
                                                                <div class="flex-grow-1">
                                                                    <h6 class="fs-16 mb-0 fw-semibold">آدرس
                                                                        <?php echo e($key + 1); ?></h6>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    onclick="getaddress(<?php echo e($address->id); ?>)"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-change-address"><i
                                                                        class="ri-edit-2-line"></i> تغییر</button>
                                                                
                                                            </div>
                                                            <h6 class="mb-1"><?php echo e($address->name); ?></h6>
                                                            <p class="mb-2 fw-500 fs-13"><?php echo e($address->phone); ?></p>
                                                            <p class="mb-2"><?php echo e($address->address); ?></p>
                                                            <p class="mb-0 fw-500 fs-13">کد پستی : <?php echo e($address->pincode); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                        <button class="btn btn-primary1-light" id="personal-details-trigger"
                                            type="button">
                                            اطلاعات شخصی
                                            <i class="ri-user-3-line ms-2 align-middle d-inline-block"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 02: اطلاعات شخصی -->
                            <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane" role="tabpanel"
                                aria-labelledby="confirm-tab-pane" tabindex="0">
                                <div class="p-3">
                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">۰۲</p>
                                    <div
                                        class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                        <div>اطلاعات شخصی :</div>
                                    </div>
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label for="firstname-personal" class="form-label">نام</label>
                                            <input type="text" class="form-control" name="personal_name"
                                                id="firstname-personal" placeholder="نام"
                                                value="<?php echo e(Auth::user()->name); ?>">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="phoneno-personal" class="form-label">شماره تلفن</label>
                                            <input type="text" class="form-control" name="personal_phone"
                                                id="phoneno-personal" placeholder="09121234567"
                                                value="<?php echo e(Auth::user()->phonenumber); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                    <button class="btn btn-primary-light" id="back-shipping-trigger" type="button"><i
                                            class="ri-truck-line me-2 align-middle d-inline-block"></i>بازگشت به
                                        ارسال</button>
                                    <button type="submit" class="btn btn-primary1-light mt-sm-0 mt-2"
                                        id="payment-trigger">
                                        ادامه به پرداخت
                                        <i class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i>
                                    </button>
                                </div>
                            </div>
                    </form>

                    <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                        aria-labelledby="shipped-tab-pane" tabindex="0">
                        <div class="p-3">
                            <p class="mb-1 fw-semibold text-muted op-5 fs-20">۰۳</p>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div
                                        class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                        <div>جزئیات پرداخت :</div>
                                    </div>
                                    <div class="mb-3 d-sm-flex d-block gap-3" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Paymentoptions"
                                                id="Paymentoptions3" value="Paymentoptions3" checked="checked">
                                            <label class="form-check-label" for="Paymentoptions3">کارت
                                                اعتباری/دبیت</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Paymentoptions"
                                                id="Paymentoptions1" value="Paymentoptions1">
                                            <label class="form-check-label" for="Paymentoptions1">پرداخت نقدی هنگام
                                                تحویل</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Paymentoptions"
                                                id="Paymentoptions2" value="Paymentoptions2">
                                            <label class="form-check-label" for="Paymentoptions2">پرداخت UPI</label>
                                        </div>
                                    </div>
                                    <div class="row gy-3 mb-3">
                                        <div class="col-xl-12">
                                            <label for="payment-card-number" class="form-label">شماره کارت</label>
                                            <input type="text" class="form-control" id="payment-card-number"
                                                placeholder="شماره کارت" value="1245 - 5447 - 8934 - XXXX">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="payment-card-name" class="form-label">نام روی کارت</label>
                                            <input type="text" class="form-control" id="payment-card-name"
                                                placeholder="نام روی کارت" value="زهرا">
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="payment-cardexpiry-date" class="form-label">تاریخ
                                                انقضا</label>
                                            <input type="text" class="form-control" id="payment-cardexpiry-date"
                                                placeholder="MM/YY" value="1404/07">
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="payment-cvv" class="form-label">کد CVV</label>
                                            <input type="text" class="form-control" id="payment-cvv"
                                                placeholder="XXX" value="341">
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="payment-security" class="form-label">رمز یکبار مصرف
                                                (OTP)</label>
                                            <input type="text" class="form-control" id="payment-security"
                                                placeholder="XXXXXX" value="183467">
                                            <label for="payment-security" class="form-label mt-1 mb-0 text-danger fs-11">
                                                <sup><i class="ri-star-s-fill"></i></sup>رمز یکبار مصرف را با کسی به
                                                اشتراک نگذارید
                                            </label>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-check">
                                                <input class="form-check-input form-checked-success" type="checkbox"
                                                    value="" id="payment-card-save" checked="">
                                                <label class="form-check-label" for="payment-card-save">
                                                    ذخیره این کارت
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                        <div>کارت‌های ذخیره‌شده :</div>
                                    </div>
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <div class="form-check payment-card-container mb-0">
                                                <input id="payment-card1" name="payment-cards" type="radio"
                                                    class="form-check-input" checked="">
                                                <div class="form-check-label">
                                                    <div
                                                        class="d-sm-flex d-block align-items-center justify-content-between">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="./assets/images/ecommerce/png/26.png"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="saved-card-details">
                                                            <p class="mb-0 fw-semibold">XXXX - XXXX - XXXX - 7646</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-check payment-card-container mb-0">
                                                <input id="payment-card2" name="payment-cards" type="radio"
                                                    class="form-check-input">
                                                <div class="form-check-label">
                                                    <div
                                                        class="d-sm-flex d-block align-items-center justify-content-between">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="./assets/images/ecommerce/png/27.png"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="saved-card-details">
                                                            <p class="mb-0 fw-semibold">XXXX - XXXX - XXXX - 9556</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                            <a type="button" href="<?php echo e(route('cancel')); ?>" class="btn btn-primary-light"
                                id="back-personal-trigger">
                                <i class="ri-user-3-line me-2 align-middle d-inline-block"></i>بازگشت
                            </a>
                            <a href="<?php echo e(route('compelete')); ?>" type="button"
                                class="btn btn-primary1-light mt-sm-0 mt-2" id="continue-payment-trigger">
                                ادامه پرداخت<i class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                        aria-labelledby="delivery-tab-pane" tabindex="0">
                        <div class="p-3 checkout-payment-success my-3">
                            <div class="mb-4">
                                <h5 class="text-success fw-semibold">پرداخت با موفقیت انجام شد...</h5>
                            </div>
                            <div class="mb-4">
                                <img src="./assets/images/ecommerce/png/24.png" alt="">
                            </div>
                            <div class="mb-4">
                                <p class="mb-1 fs-14">می‌توانید سفارش خود را از طریق <a class="link-primary1"
                                        href="#"><u>پیگیری سفارش</u></a> دنبال
                                    کنید</p>
                                <p class="text-muted">از خرید شما سپاسگزاریم.</p>
                            </div>
                            <a href="<?php echo e(route('index')); ?>" class="btn btn-primary">ادامه خرید<i
                                    class="bi bi-cart ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Modal افزودن آدرس -->
                <div class="modal fade" id="modal-new-address" tabindex="-1" aria-labelledby="modal-new-address"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="staticBackdropLabel">آدرس جدید</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="address-form" action="<?php echo e(route('add_address')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label for="fullname-new" class="form-label">نام کامل</label>
                                            <input type="text" class="form-control" name="name" id="fullname-new"
                                                placeholder="نام کامل">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="phonenumber-new" class="form-label">شماره تلفن</label>
                                            <input type="number" class="form-control" name="phone"
                                                id="phonenumber-new" placeholder="تلفن">
                                        </div>
                                        <div class="col-xl-8">
                                            <label for="address-new" class="form-label">آدرس</label>
                                            <input type="text" class="form-control" name="address" id="address-new"
                                                placeholder="آدرس">
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="pincode-new" class="form-label">کدپستی</label>
                                            <input type="number" class="form-control" name="pincode" id="pincode-new"
                                                placeholder="کدپستی">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <label class="form-label">انتخاب موقعیت روی نقشه</label>
                                        <div id="map"
                                            style="height: 400px; width: 100%; border:1px solid #ccc; border-radius: 8px;">
                                        </div>
                                    </div>

                                    <input type="hidden" id="lat" name="lat">
                                    <input type="hidden" id="lng" name="lng">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</a>
                                <button type="submit" form="address-form" class="btn btn-success">ذخیره
                                    آدرس</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-change-address" tabindex="-1" aria-labelledby="modal-change-address"
                    aria-hidden="false">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="staticBackdropLabel">تغییر آدرس</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="address-form-change" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label for="fullname-new" class="form-label">نام کامل</label>
                                            <input type="text" class="form-control" name="name" id="name-change"
                                                placeholder="نام کامل">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="phonenumber-new" class="form-label">شماره تلفن</label>
                                            <input type="number" class="form-control" name="phone"
                                                id="phonenumber-change" placeholder="تلفن">
                                        </div>
                                        <div class="col-xl-8">
                                            <label for="address-new" class="form-label">آدرس</label>
                                            <input type="text" class="form-control" name="address"
                                                id="address-change" placeholder="آدرس">
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="pincode-new" class="form-label">کدپستی</label>
                                            <input type="number" class="form-control" name="pincode"
                                                id="pincode-change" placeholder="کدپستی">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <label class="form-label">انتخاب موقعیت روی نقشه</label>
                                        <div id="Cmap"
                                            style="height: 400px; width: 100%; border:1px solid #ccc; border-radius: 8px;">
                                        </div>
                                    </div>

                                    <input type="hidden" id="Clat" name="lat">
                                    <input type="hidden" id="Clng" name="lng">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</a>
                                <button type="submit" form="address-form-change" class="btn btn-success">ویرایش
                                    آدرس</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($open != 3): ?>
        <div class="col-xxl-3">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title me-1">خلاصه سفارش</div><span
                        class="badge bg-primary-transparent rounded-pill"><?php echo e(Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->count()); ?></span>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group mb-0 border-0 rounded-0">
                        <?php
                            $total_price = 0;
                        ?>
                        <?php $__currentLoopData = Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item p-3 border-top-0">
                                <div class="d-flex align-items-center flex-wrap">
                                    <span class="avatar avatar-lg bg-light me-2">
                                        <img src="<?php echo e(asset($product->product->images->first()->url)); ?>" alt="">
                                    </span>
                                    <div class="flex-fill w-50">
                                        <p class="mb-0 fw-semibold text-truncate"><?php echo e($product->product->name); ?></p>
                                        <p class="mb-0 text-muted fs-12">تعداد : <?php echo e($product->number); ?>

                                            </p>
                                    </div>
                                    <div>
                                        <p class="mb-0 text-end">
                                            <a href="<?php echo e(route('cart_delete', [$product])); ?>">
                                                <i class="ri-close-line fs-16 text-muted"></i>
                                            </a>
                                        </p>
                                        <p class="mb-0 fs-14 fw-semibold"><?php echo e(number_format($product->price)); ?>

                                        </p>
                                    </div>
                                </div>
                            </li>
                            <?php
                                $total_price += $product->price;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    
                    <div class="p-3 border-bottom border-block-end-dashed">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-muted">جمع کل</div>
                            <div class="fw-semibold fs-14" id="subtotal"><?php echo e(number_format($total_price)); ?></div>
                        </div>
                        
                        <?php if($check != null): ?>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">هزینه ارسال</div>
                                <div class="fw-semibold fs-14 text-danger" id="shipping-price">
                                    <?php echo e(number_format($check->shipping_method->price)); ?></div>
                            </div>
                        <?php else: ?>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">هزینه ارسال</div>
                                <div class="fw-semibold fs-14 text-danger" id="shipping-price">0</div>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                    <?php if($check != null): ?>
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fs-15">مجموع :</div>
                                <div class="fw-semibold fs-16 text-dark" id="total-price">
                                    <?php echo e($total_price + $check->shipping_method->price); ?></div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fs-15">مجموع :</div>
                                <div class="fw-semibold fs-16 text-dark" id="total-price"> 1,387</div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>
    <!-- نقشه و JS -->
    <link rel="stylesheet" href="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.css" />
    <script src="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.js"></script>
    <script>
        // ----------- نقشه افزودن آدرس -----------
        var map = new L.Map('map', {
            key: "web.c5d3eb9f8e644df5bb120d4f8a1b5748",
            maptype: "neshan",
            poi: true,
            traffic: true,
            center: [35.6892, 51.3890],
            zoom: 14
        });

        var marker;

        function setMarker(lat, lng) {
            if (marker) {
                marker.setLatLng([lat, lng]);
            } else {
                marker = L.marker([lat, lng]).addTo(map);
            }
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
        }

        setMarker(35.6892, 51.3890);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                setMarker(pos.coords.latitude, pos.coords.longitude);
                map.panTo([pos.coords.latitude, pos.coords.longitude]);
            });
        }

        map.on('click', function(e) {
            setMarker(e.latlng.lat, e.latlng.lng);
        });


        // ----------- نقشه تغییر آدرس -----------
        var Cmap = new L.Map('Cmap', {
            key: "web.c5d3eb9f8e644df5bb120d4f8a1b5748",
            maptype: "neshan",
            poi: true,
            traffic: true,
            center: [35.6892, 51.3890],
            zoom: 14
        });

        var Cmarker;

        function setCMarker(lat, lng) {
            if (Cmarker) {
                Cmarker.setLatLng([lat, lng]);
            } else {
                Cmarker = L.marker([lat, lng]).addTo(Cmap);
            }
            document.getElementById('Clat').value = lat;
            document.getElementById('Clng').value = lng;
        }

        setCMarker(35.6892, 51.3890);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                setCMarker(pos.coords.latitude, pos.coords.longitude);
                Cmap.panTo([pos.coords.latitude, pos.coords.longitude]);
            });
        }

        Cmap.on('click', function(e) {
            setCMarker(e.latlng.lat, e.latlng.lng);
        });


        $('#modal-change-address').on('shown.bs.modal', function() {
            map.invalidateSize();
        });

        $('#modal-new-address').on('shown.bs.modal', function() {
            Cmap.invalidateSize();
        });


        // مدیریت تب‌ها و دکمه‌ها
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = {
                order: document.getElementById('order-tab'),
                confirmed: document.getElementById('confirmed-tab'),
                shipped: document.getElementById('shipped-tab'),
                delivered: document.getElementById('delivered-tab')
            };

            function disableTab(tab) {
                tab.classList.add('disabled');
                tab.setAttribute('disabled', 'true');
                tab.addEventListener('click', e => e.preventDefault());
            }

            function enableTab(tab) {
                tab.classList.remove('disabled');
                tab.removeAttribute('disabled');
            }

            Object.values(tabs).forEach(tab => disableTab(tab));
            const open = <?php echo json_encode($open, 15, 512) ?>;
            if (open === 3) {
                enableTab(tabs.delivered);
                new bootstrap.Tab(tabs.delivered).show();
            } else if (open === 2) {
                enableTab(tabs.shipped);
                new bootstrap.Tab(tabs.shipped).show();
                disableTab(tabs.delivered);
            } else {
                enableTab(tabs.order);
                new bootstrap.Tab(tabs.order).show();
                document.getElementById('personal-details-trigger')?.addEventListener('click', function() {
                    enableTab(tabs.confirmed);
                    new bootstrap.Tab(tabs.confirmed).show();
                });
                document.getElementById('back-shipping-trigger')?.addEventListener('click', function() {
                    enableTab(tabs.order);
                    new bootstrap.Tab(tabs.order).show();
                });
            }
        });
    </script>
    <script src="<?php echo e('../../assets/js/checkout.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/checkout/checkout.blade.php ENDPATH**/ ?>