
<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">پروفایل</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0 mt-2">حساب کاربری</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        سفارش های من
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered w-100" id="orders-list">
                            <thead>
                                <tr>
                                    <th scope="col">شماره</th>
                                    <th scope="col">تاریخ ثبت</th>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin', 'App\\Models\User')): ?>
                                        <th scope="col">کاربر</th>
                                    <?php endif; ?>
                                    <th scope="col">تعداد اقلام</th>
                                    <th scope="col">روش ارسال</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">مبلغ</th>
                                    <th style="width: 100px" scope="col"></th>

                                </tr>
                            </thead>
                            <?php $__env->startPush('scripts'); ?>
                                <script>
                                    $(document).ready(
                                        $("#orders-list").DataTable({
                                            processing: true,
                                            serverSide: true,
                                            ajax: "<?php echo e(route('orders_list.post')); ?>",
                                            columns: [
                                                {
                                                    data: 'id',
                                                    name: 'id'
                                                },
                                                {
                                                    data: 'created_at',
                                                    name: 'created_at'
                                                },
                                                {
                                                    data: 'user',
                                                    name: 'user'
                                                },
                                                {
                                                    data: 'products-number',
                                                    name: 'products-number'
                                                },
                                                {
                                                    data: 'shipping_method',
                                                    name: 'shipping_method'
                                                },
                                                {
                                                    data: 'status',
                                                    name: 'status'
                                                },
                                                {
                                                    data: 'price',
                                                    name: 'price'
                                                },
                                                {
                                                    data: 'action',
                                                    name: 'action'
                                                },
                                            ],
                                            language: {
                                                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fa.json"
                                            },
                                            // pageLength: 10, // پیش‌فرض 10 ردیف
                                            // responsive: true, // جدول ریسپانسیو شود
                                            dom: 'Bfrtip', // نمایش دکمه‌ها، سرچ و pagination
                                            buttons: ['excel']
                                        })
                                    )
                                </script>
                            <?php $__env->stopPush(); ?>
                            

                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center flex-wrap overflow-auto">
 
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\shop-app\resources\views/orders/orders_list_admin.blade.php ENDPATH**/ ?>