<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xxl-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h6 class="fw-medium mb-0">دسته بندی ها</h6>
                <div class="d-flex gap-2 align-items-center">
                    <a class="categories-arrow left"><i class="ri-arrow-left-s-line"></i></a>
                    <a class="categories-arrow right"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>

            <div class="row pos-category" id="filter">
                <!-- همه دسته بندی ها -->
                <div class="col-xxl col-xl-4 col-md-6">
                    <div class="card custom-card active">
                        <div class="card-body p-3">
                            <a href="javascript:void(0);" class="stretched-link categories" data-filter="*">
                                <div class="d-flex gap-2 categories-content">
                                    <span class="avatar avatar-md">
                                        <img src="<?php echo e(asset('images/all_categories.png')); ?>" alt="">
                                    </span>
                                    <div>
                                        <span class="fw-medium">همه دسته بندی ها</span>
                                        <span class="d-block op-7 fs-12"><?php echo e($products->count()); ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- سایر دسته بندی ها -->
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xxl col-xl-4 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body p-3">
                                <a href="javascript:void(0);" class="stretched-link categories"
                                    data-filter=".cat-<?php echo e($category->id); ?>">
                                    <div class="d-flex gap-2 categories-content">
                                        <span class="avatar avatar-md">
                                            <img src="<?php echo e(asset($category->image)); ?>" alt="">
                                        </span>
                                        <div>
                                            <span class="fw-medium"><?php echo e($category->name); ?></span>
                                            <span
                                                class="d-block op-7 fs-12"><?php echo e($products->where('category_id', $category->id)->count()); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <!-- لیست محصولات -->
    <div class="row list-wrapper">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($product->attributes->count() > 0): ?>
                <div class="col-xxl-3 col-xl-4 col-md-6 card-item cat-<?php echo e($product->category_id); ?>">
                    <div class="card custom-card d-flex flex-column p-3" style="height: 440px">
                        <!-- تصویر محصول -->
                        <div class="card-img-top border-bottom border-block-end-dashed position-relative"
                            style="height: 250px;">
                            <div class="img-box-2 h-100 p-2 d-flex align-items-center justify-content-center">
                                <img src="<?php echo e($product->images->first()->url); ?>" alt="img" class="img-fluid rounded"
                                    style="max-height: 100%; object-fit: contain;">
                            </div>
                        </div>

                        <!-- اطلاعات محصول -->
                        <div class="card-body bg-secondary-transparent rounded-bottom mt-auto d-flex flex-column">
                            <div class="mb-3">
                                <a href="javascript:void(0);" class="fw-medium fs-16"><?php echo e($product->name); ?></a>
                                <span class="fs-12 text-muted d-block"><?php echo e($product->category->name); ?></span>
                            </div>
                            <div class="mt-auto">
                                <a href="<?php echo e(route('productDetails', [$product])); ?>"
                                    class="btn btn-primary-gradient btn-wave w-100">مشاهده محصول</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/index.blade.php ENDPATH**/ ?>