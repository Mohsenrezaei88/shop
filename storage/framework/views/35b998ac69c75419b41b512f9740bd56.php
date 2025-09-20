<?php echo $__env->make('auth.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1100;">
    <?php if(session()->has('success')): ?>
        <div id="successToast" class="toast colored-toast bg-success-transparent" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-success text-fixed-white">
                <img class="bd-placeholder-img rounded me-2" src="<?php echo e(url('assets/images/brand-logos/toggle-dark.png')); ?>"
                    alt="...">
                <strong class="me-auto">Xintra</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-white">
                <?php echo e(session('success')); ?>

            </div>
        </div>
    <?php endif; ?>

    <?php if(session()->has('error')): ?>
        <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-danger text-fixed-white">
                <img class="bd-placeholder-img rounded me-2"
                    src="<?php echo e(url('assets/images/brand-logos/toggle-dark.png')); ?>" alt="...">
                <strong class="me-auto">Xintra</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-white">
                <?php echo e(session('error')); ?>

            </div>
        </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header bg-danger text-fixed-white">
                    <img class="bd-placeholder-img rounded me-2"
                        src="<?php echo e(url('assets/images/brand-logos/toggle-dark.png')); ?>" alt="...">
                    <strong class="me-auto">Shop</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body bg-white">
                    <?php echo e($error); ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.toast').forEach(function(toastEl) {
            const toast = new bootstrap.Toast(toastEl)
            toast.show()
        })
    })
</script>
<div class="row authentication authentication-cover-main mx-0">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('auth.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\class\laravel\backups\shop-app\resources\views/auth/layout/master.blade.php ENDPATH**/ ?>