<?php $__env->startSection('content'); ?>
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="<?php echo e(route('index')); ?>" class="header-logo">
                <img src="../../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                <img src="../../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                <img src="../../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                <img src="../../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                <img src="../../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                <img src="../../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                         viewbox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu">
                    <li class="slide__category"><span class="category-name">اصلی</span></li>
                    <li class="slide">
                        <a href="<?php echo e(route('index')); ?>" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            <span class="side-menu__label">خانه</span>
                        </a>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 side-menu__icon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>

                            <span class="side-menu__label">کاربران</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('users_list')); ?>" class="side-menu__item">لیست کاربران</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 class="w-5 h-4 side-menu__icon" viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5" />
                            </svg>
                            <span class="side-menu__label">محصولات</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('producsList')); ?>" class="side-menu__item">لیست محصولات</a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(route('add_product')); ?>" class="side-menu__item">افزودن محصول</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="w-5 h-4 side-menu__icon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M13 5h8" />
                                <path d="M13 9h5" />
                                <path d="M13 15h8" />
                                <path d="M13 19h5" />
                                <path
                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                <path
                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            </svg>
                            <span class="side-menu__label">ویژگی ها</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('add_attributes', ['none'])); ?>" class="side-menu__item">افزون
                                    ویژگی به محصولات</a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(route('edit_attr', ['none'])); ?>" class="side-menu__item">
                                    ویرایش ویژگی ها</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z">
                                </path>
                            </svg>
                            <span class="side-menu__label">دسته بندی ها</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('add_category')); ?>" class="side-menu__item">افزودن دسته بندی</a>
                            </li>
                            <li class="slide">
                                <a href="<?php echo e(route('categories_list')); ?>" class="side-menu__item">لیست دسته بندی
                                    ها</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                 stroke-linecap="round" stroke-linejoin="round" class="w-5 h-4 side-menu__icon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                <path d="M3 9l4 0" />
                            </svg>
                            <span class="side-menu__label">سفارشات</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('orders_list_admin')); ?>" class="side-menu__item">لیست سفارشات</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-4 side-menu__icon" width="24"
                                 height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21v-14l9 -4l9 4v14" />
                                <path d="M13 13h-6v8h6v-8z" />
                                <path d="M18 13h-1v8h1v-8z" />
                            </svg>

                            <span class="side-menu__label">برند ها</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('add_brand')); ?>" class="side-menu__item">افزودن برند</a>
                                <a href="<?php echo e(route('brands_list')); ?>" class="side-menu__item">لیست برند ها</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="w-5 h-4 side-menu__icon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M7 3m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path
                                    d="M4.012 7.26a2.005 2.005 0 0 0 -1.012 1.737v10c0 1.1 .9 2 2 2h10c.75 0 1.158 -.385 1.5 -1" />
                                <path d="M11 7h5" />
                                <path d="M11 10h6" />
                                <path d="M11 13h3" />
                            </svg>


                            <span class="side-menu__label">مقالات</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="<?php echo e(route('add_post')); ?>" class="side-menu__item">افزودن مقاله</a>
                                <a href="<?php echo e(route('posts_list')); ?>" class="side-menu__item">لیست مقالات</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                               width="24" height="24" viewbox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
    <?php $__env->startPush('hide'); ?>
        <div class="header-element mx-lg-0 mx-2">
            <a aria-label="Hide Sidebar"
               class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle p-2"
               data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
        </div>
    <?php $__env->stopPush(); ?>
    <!-- Start::page-header -->
    <div style="margin-right: 250px">
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('index')); ?>">
                        خانه
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">پنل ادمین</li>
            </ol>
            <h1 class="page-title fw-medium fs-18 mb-0">پنل ادمین</h1>
        </div>
    </div>

    <!-- End::page-header -->

    <!-- Start:: row-1 -->
    <div class="row">
        <div class="col-xl-8">
            <div class="row">
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="text-muted d-block mb-1">مجموع محصولات</span>
                                    <h4 class="fw-medium mb-0"><?php echo e($products->count()); ?></h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary">
                                        <i class="ti ti-shopping-cart fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="d-block text-muted mb-1">مجموع کاربران</span>
                                    <h4 class="fw-medium mb-0"><?php echo e($users->count()); ?></h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary1">
                                        <i class="ti ti-users fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="text-muted d-block mb-1">مجموع دسته بندی ها</span>
                                    <h4 class="fw-medium mb-0"><?php echo e($categories->count()); ?></h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-category-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 4h6v6h-6zm10 0h6v6h-6zm-10 10h6v6h-6zm10 3h6m-3 -3v6" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="text-muted d-block mb-1">کل درآمد</span>
                                    <h4 class="fw-medium mb-0"><?php echo e(number_format($total_price)); ?></h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary2">
                                        <i class="ti ti-currency-dollar fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-6">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header pb-0 justify-content-between">
                            <div class="card-title">
                                آمار سفارشات
                            </div>
                        </div>

                        <div class="card-body py-4 px-3">
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-md bg-primary-transparent">
                                    <i class="ti ti-trending-up fs-5"></i>
                                </div>
                                <div class="flex-fill d-flex align-items-start justify-content-between">
                                    <div>
                                        <span class="fs-11 mb-1 d-block fw-medium">کل سفارشات</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0 d-flex align-items-center"><?php echo e($total_orders->count()); ?></h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="orders" class="my-2"></div>
                        </div>
                        <div class="card-footer border-top border-block-start-dashed">
                            <div class="d-grid">
                                <button
                                    class="btn btn-primary-ghost btn-wave fw-medium waves-effect waves-light table-icon">
                                    آمار کامل
                                    <i class="ti ti-arrow-narrow-right ms-2 fs-16 d-inline-block align-middle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card main-dashboard-banner overflow-hidden">
                        <div class="card-body p-4 py-5">
                            <div class="row justify-content-between">
                                <div class="col-xxl-7 col-xl-5 col-lg-5 col-md-5 col-sm-5">
                                    <h4 class="mb-3 fw-medium text-fixed-white">برگشت به فروشگاه</h4>
                                    <p class="mb-4 text-fixed-white">بازگشت به فروشگاه و ادامه خرید</p>
                                    <a href="<?php echo e(route('index')); ?>"
                                        class="fw-medium text-fixed-white text-decoration-underline">
                                        بازگشت
                                        <i class="ti ti-arrow-narrow-left align-middle d-inline-flex"></i>
                                    </a>
                                </div>
                                <div
                                    class="col-xxl-4 col-xl-7 col-lg-7 col-md-7 col-sm-7 d-sm-block d-none text-end my-auto">
                                    <img src="../../assets/images//media/media-86.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                دسته‌های پرفروش
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="progress-stacked progress-sm mb-2 gap-1">
                                    <?php
                                        $i = 1;
                                    ?>
                                    <?php $__currentLoopData = $sell_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category != 0): ?>
                                            <div class="progress-bar bg-primary<?php echo e($i); ?>" role="progressbar"
                                                style="width: <?php echo e(100 / ($total_price / $category)); ?>%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                            <?php
                                                $i++;
                                            ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div>مجموع فروش</div>
                                    <div class="h6 mb-0"><?php echo e(number_format($total_price)); ?></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <?php
                                            $i = 1;
                                        ?>
                                        <?php $__currentLoopData = $sell_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <span
                                                        class="d-inline-block bg-primary<?php echo e($i); ?> rounded-circle align-middle"
                                                        style=";width: 14px; height: 14px;"></span>
                                                    <?php echo e($key); ?>

                                                </td>
                                                <td>
                                                    <span class="fw-medium"><?php echo e(number_format($category)); ?></span>
                                                </td>
                                            </tr>
                                            <?php
                                                $i++;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(url('../../assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(url('../../assets/js/sales-dashboard.js')); ?>"></script>
    <script>
        var options = {
            series: [<?php echo e($total_orders->where('status', 1)->count()); ?>,
                <?php echo e($total_orders->where('status', 2)->count()); ?>,
                <?php echo e($total_orders->where('status', 3)->count()); ?>,
                <?php echo e($total_orders->where('status', 4)->count()); ?>,
            ],
            labels: ["پرداخت نشده", "پرداخت شده", "در حال آماده سازی", "ارسال شده", "تحویل داده شده"],
            chart: {
                height: 199,
                type: 'donut',
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
                height: 50,
                markers: {
                    width: 8,
                    height: 8,
                    radius: 2,
                },
                offsetY: 10,
            },
            stroke: {
                show: true,
                curve: 'smooth',
                lineCap: 'round',
                colors: "#fff",
                width: 0,
                dashArray: 0,
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 90,
                    offsetY: 10,
                    expandOnClick: false,
                    donut: {
                        size: '80%',
                        background: 'transparent',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: '20px',
                                color: '#495057',
                                offsetY: -25
                            },
                            value: {
                                show: true,
                                fontSize: '15px',
                                color: undefined,
                                offsetY: -20,
                                formatter: function(val) {
                                    return val + "%"
                                }
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: 'کل',
                                fontSize: '22px',
                                fontWeight: 600,
                                color: '#495057',
                            }

                        }
                    }
                }
            },
            grid: {
                padding: {
                    bottom: -100
                }
            },
            colors: ["color(xyz-d65 0.33 0.19 0.1 / 0.98)", "rgba(227, 84, 212, 1)", "rgba(255, 93, 159, 1)",
                "rgba(255, 142, 111, 1)" , "var(--primary-color)"
            ],
        };
        var chart = new ApexCharts(document.querySelector("#orders"), options);
        chart.render();
    </script>
    <!-- End:: row-1 -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/admin/index.blade.php ENDPATH**/ ?>