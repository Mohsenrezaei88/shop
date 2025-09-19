@extends('layout.master')
@section('content')
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
                        لیست برند ها
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered" id="brands-list">
                            <thead>
                                <tr>
                                    <th scope="col">برند</th>
                                    <th scope="col">تعداد محصولات</th>
                                    <th scope="col">تاریخ ایجاد</th>
                                    <th style="width: 30px" scope="col">عملیات</th>

                                </tr>
                            </thead>
                            @push('scripts')
                                <script>
                                    $(document).ready(
                                        $("#brands-list").DataTable({
                                            processing: true,
                                            serverSide: true,
                                            ajax: "{{ route('brands_list.post') }}",
                                            columns: [{
                                                    data: 'name',
                                                    name: 'name'
                                                },
                                                {
                                                    data: "products-number",
                                                    name: "products-number"
                                                },
                                                {
                                                    data: "created_at",
                                                    name: "created_at"
                                                },
                                                {
                                                    data: "action",
                                                    name: "action"
                                                }
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
                            @endpush

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
@endsection
