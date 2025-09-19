@extends('layout.master')
@section('content')
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">پروفایل</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0 mt-2">حساب کاربری</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-3">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <div class="row w-100">
                        <div class="col-xxl-12">
                            <span class="mx-auto fw-bold">{{ Auth::user()->name }}</span>
                        </div>
                        <div class="col-xxl-12">
                            <span class="d-block text-secondary mt-1">{{ Auth::user()->phonenumber }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <button onclick="window.location.href = '#'" class="btn btn-outline-secondary btn-wave waves-effect waves-light active w-100">
                                سفارش ها
                            </button>
                        </li>
                        <li class="list-group-item">
                            <button onclick="window.location.href = '{{ route('address_list') }}'" class="btn btn-outline-secondary btn-wave waves-effect waves-light w-100">
                                آدرس ها
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-9">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        سفارش های من
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered" id="orders-list">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">شماره</th> --}}
                                    <th scope="col">تاریخ ثبت</th>
                                    <th scope="col">تعداد اقلام</th>
                                    <th scope="col">روش ارسال</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">مبلغ</th>
                                    <th style="width: 100px" scope="col"></th>

                                </tr>
                            </thead>
                            @push('scripts')
                                 <script>
                                    $(document).ready(
                                        $("#orders-list").DataTable({
                                            processing: true,
                                            serverSide: true,
                                            ajax: "{{ route('orders_list.post') }}",
                                            columns: [
                                                {
                                                    data: 'created_at',
                                                    name: 'created_at'
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
