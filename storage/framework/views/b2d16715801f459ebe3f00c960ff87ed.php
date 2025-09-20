
<?php $__env->startSection('content'); ?>
    <div class="row authentication two-step-verification authentication-cover-main mx-0 p-0">
        <div class="col-xxl-6 col-xl-7">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                    <form method="post" action="<?php echo e(route('vLogin.post')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="card custom-card my-auto border">
                            <div class="card-body p-4 p-sm-5">
                                <p class="h5 mb-2 text-center">کد تأیید</p>
                                
                                <?php if(Cache::get('register') != true): ?>
                                    <p class="mb-4 text-muted op-7 fw-normal text-center fs-12">کد ۴ رقمی ارسال‌شده به شماره
                                        موبایل
                                        <?php echo e($user->phonenumber); ?> را وارد کنید.</p>
                                <?php else: ?>
                                    <p class="mb-4 text-muted op-7 fw-normal text-center fs-12">کد ۴ رقمی ارسال‌شده به شماره
                                        موبایل
                                        <?php echo e($user['phonenumber']); ?> را وارد کنید.</p>
                                <?php endif; ?>
                                <div class="row gy-3">
                                    <div class="col-xl-12 mb-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="text" name="four" class="form-control text-center"
                                                    id="four" maxlength="1">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="three" class="form-control text-center"
                                                    id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="two" class="form-control text-center"
                                                    id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="one" class="form-control text-center"
                                                    id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                            </div>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label fs-14" for="defaultCheck1">
                                                کدی دریافت نکردید؟<a href="#" onclick="makecode()"
                                                    class="text-primary ms-2 d-inline-block">ارسال مجدد</a>
                                            </label>
                                            <script>
                                                function makecode() {
                                                    <?php
                                                        Session::flash('user', $user);
                                                        Session::flash('register', $register);
                                                    ?>
                                                    window.location.replace('<?php echo e(route('make-code')); ?>')
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <button type="submit" class="btn btn-primary">تأیید</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none px-0">
            <div class="authentication-cover overflow-hidden">
                <div class="authentication-cover-logo">
                    <a href="index.html">
                        <img src="./assets/images/brand-logos/desktop-white.png" alt=""
                            class="authentication-brand desktop-white">
                    </a>
                </div>
                <div class="aunthentication-cover-content d-flex align-items-center justify-content-center">
                    <div>
                        <h3 class="text-fixed-white mb-1 fw-medium">خوش آمدید!</h3>
                        <h6 class="text-fixed-white mb-3 fw-medium">وارد حساب کاربری خود شوید</h6>
                        <p class="text-fixed-white mb-1 op-6">به فروشگاه موبایل خوش آمدید. لطفاً وارد شوید
                            تا به بقیه اطلاعات دسترسی داشته باشید اطلاعات ورود شما تضمین‌کننده یکپارچگی و عملکرد سیستم است.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(url('../../assets/js/two-step-verification.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\shop-app\resources\views/auth/vLogin.blade.php ENDPATH**/ ?>