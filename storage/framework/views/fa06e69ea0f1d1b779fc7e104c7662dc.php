<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">خانه</a></li>
                    <li class="breadcrumb-item"><a href=<?php echo e(route('posts')); ?>>پست ها</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($post->title); ?></li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0 mt-2"><?php echo e($post->title); ?></h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xxl-12">
            <div class="card bg-primary-transparent">
                <div class="card-body">
                    <div style="background-image: url(<?php echo e(asset($post->image)); ?>); background-size:100% 100%; height:400px"
                        class="card custom-card overflow-hidden job-info-banner">
                    </div>
                    <div class="card custom-card job-info-data mb-2">
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height:70px;">
                            <h5 class="fw-medium mb-0">
                                <?php echo e($post->title); ?>

                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="card custom-card">
                <div class="card-body">
                    <h6 class="fw-medium">متن مقاله</h6>
                    <p class="op-9">
                        <?php echo e($post->body); ?>

                    </p>
                    <hr>
                    <h6 class="fw-medium d-inline-block">نویسنده : </h6>
                    <span class="text-secondary"><?php echo e($post->writer->name); ?></span>
                </div>
            </div>
        </div>
        <div class="col-xxl-3">
            <div class="mb-1">
                <h6 class="fw-medium mb-3">محصولات مرتبط</h6>
                <div class="swiper swiper-vertical overflow-hidden swiper-related-jobs">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide" style="height: 100px !important">
                                <div class="card custom-card featured-jobs shadow-none border">
                                    <div class="card-body">
                                        <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                            <div>
                                                <span class="avatar avatar-md border p-1">
                                                    <img src="<?php echo e(asset($product->images->first()->url)); ?>" alt="image">
                                                </span>
                                            </div>
                                            <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                <h6 class="fw-medium mb-0 d-flex align-items-center text-truncate w-75"><a
                                                        href="javascript:void(0);"><?php echo e($product->name); ?></a></h6>
                                            </div>
                                        </div>
                                        <a href="<?php echo e(route('productDetails', [$product])); ?>"
                                            class="fw-medium btn btn-sm btn-primary d-grid text-nowrap">
                                            مشاهده محصول
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(url('../../assets/libs/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('../../assets/js/job-details.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/posts/details.blade.php ENDPATH**/ ?>