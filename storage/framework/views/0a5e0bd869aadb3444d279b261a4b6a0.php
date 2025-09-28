<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">برنامه‌ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">وظیفه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">جزئیات وظیفه</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">پیام ها</h1>
        </div>
 
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-3">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <p>خوانده نشده</p>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <?php $__currentLoopData = $unreadnotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="flex-fill">
                                        <span style="color: rgb(158, 92, 247)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8 9h8" />
                                                <path d="M8 13h6" />
                                                <path
                                                    d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                            </svg></span>

                                        <a href="javascript:void(0);"><span class="fw-medium"><?php echo e($notif->title); ?></span></a>
                                        <span
                                            class="text-muted fs-12 fw-normal text-truncate me-2 w-50"><?php echo e($notif->text); ?></span>
                                        <button onclick="window.location.href = '<?php echo e(route('read_notif', [$notif])); ?>'"
                                            href=""
                                            class="btn btn-icon btn-sm btn-primary-light align-items-center justify-content-center">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <p>خوانده شده</p>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <?php $__currentLoopData = $readnotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="flex-fill">
                                        <span style="color: rgb(158, 92, 247)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8 9h8" />
                                                <path d="M8 13h6" />
                                                <path
                                                    d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                            </svg></span>
                                        <a href="javascript:void(0);"><span
                                                class="fw-medium"><?php echo e($notif->title); ?></span></a>
                                        <span
                                            class="text-muted fs-12 fw-normal text-truncate me-2 w-50"><?php echo e($notif->text); ?></span>
                                        <button onclick="window.location.href = '<?php echo e(route('read_notif', [$notif])); ?>'"
                                            href=""
                                            class="btn btn-icon btn-sm btn-primary-light align-items-center justify-content-center">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-9">
            <?php if($check != null): ?>
                <div class="card custom-card">
                    <div class="card-header d-flex gap-2 mb-4 align-items-center">
                        <div class="fs-15 fw-medium">عنوان پیام :</div>
                        <h5 class="fw-medium mb-0">
                            <?php echo e($check->title); ?>

                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4 mt-3"><?php echo e($check->text); ?></p>

                        <div>
                            <a class="btn btn-purple-gradient btn-wave w-25" href="<?php echo e($check->link); ?>">مشاهده</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="card custom-card bg-secondary w-100" style="height: 500px;">
                    <h1 class="text-white mx-auto my-auto">
                        پیام مورد نظر خود را انتخاب کنید
                    </h1>
                </div>
            <?php endif; ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\backups\shop-app\resources\views/notifications/read.blade.php ENDPATH**/ ?>