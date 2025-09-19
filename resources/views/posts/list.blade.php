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
                        لیست مقالات
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered" id="posts-list">
                            <thead>
                                <tr>
                                    <th scope="col">نام مقاله</th>
                                    <th scope="col">نویسنده</th>
                                    <th scope="col">دسته بندی</th>
                                    <th scope="col">تاریخ ایجاد</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                            </thead>


                        </table>
                    </div>
                </div>
                @push('scripts')
                    <script>
                        $(document).ready(
                            $("#posts-list").DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: "{{ route('posts_list.post') }}",
                                columns: [{
                                        data: 'title',
                                        name: 'title'
                                    },
                                    {
                                        data: "writer",
                                        name: "writer"
                                    },
                                    {
                                        data: "category",
                                        name: "category"
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
            </div>
        </div>
    </div>
@endsection
