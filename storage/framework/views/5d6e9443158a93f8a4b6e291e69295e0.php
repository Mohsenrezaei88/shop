
<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">اپلیکیشن‌ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">تجارت الکترونیک</a></li>
                    <li class="breadcrumb-item active" aria-current="page">لیست محصولات</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">لیست محصولات</h1>
        </div>

    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        لیست محصولات
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive w-100">
                        <table class="table text-nowrap table-bordered" id="products-list">
                            <thead>
                                <tr>
                                    <th scope="col">محصول</th>
                                    <th scope="col">دسته‌بندی</th>
                                    <th scope="col">قیمت پایه</th>
                                    <th scope="col">موجودی</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">تاریخ انتشار</th>
                                    <th scope="col">عملیات</th>

                                </tr>
                            </thead>

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
    <?php $__env->startPush('scripts'); ?>
            <script>
        $(document).ready(function() {
            $('#products-list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('producsList.post')); ?>",
                columns: [{
                    data: 'fullname',
                    name: 'name'
                },
                {
                    data: 'category',
                    name: 'category'
                },
                {
                    data: 'price',
                    name : 'price'
                },
                {
                    data : "inv",
                    name : "Inventory"
                },
                {
                    data : "public_status",
                    name : "public"
                },
                {
                    data : "created_at",
                    name : "created_at"
                },
                {
                    data : "action",
                    name : "action"
                }
             ],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fa.json"
                },
                // pageLength: 10, // پیش‌فرض 10 ردیف
                // responsive: true, // جدول ریسپانسیو شود
                dom: 'Bfrtip', // نمایش دکمه‌ها، سرچ و pagination
                buttons: ['excel']
            });
        });
    </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\shop-app\resources\views/products/products_list.blade.php ENDPATH**/ ?>