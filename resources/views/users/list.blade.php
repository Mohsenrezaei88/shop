@extends('layout.master')

@section('content')
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">اپلیکیشن‌ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">تجارت الکترونیک</a></li>
                    <li class="breadcrumb-item active" aria-current="page">لیست کاربران</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">لیست کاربران</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        لیست کاربران
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsivev w-100">
                        <table class="table text-nowrap table-bordered" id="users-table">
                            <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>نام</th>
                                    <th>شماره تلفن</th>
                                    <th>تاریخ عضویت</th>
                                    <th>تعداد سفارشات موفق</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center flex-wrap overflow-auto">
                        <!-- اختیاری -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- jQuery اول -->
     {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}

    <!-- DataTables بعد -->
    {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users_list.post') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phonenumber',
                        name: 'phonenumber'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'orders',
                        name: 'orders'
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
            });
        });
    </script>
@endpush
