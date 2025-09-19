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
                                    @can('admin', 'App\\Models\User')
                                        <th scope="col">کاربر</th>
                                    @endcan
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
                            @endpush
                            {{-- <tbody>
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);">{{ $key + 1 }}</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span>{{ $order->created_at_shamsi }}</span></td>
                                        @can('admin', 'App\\Models\User')
                                            <td>{{ $order->user->name }}</td>
                                        @endcan
                                        <td>{{ Auth::user()->cart->where('order_id', $order->id)->get()->count() }}</td>
                                        <td>
                                            <span>{{ $order->shipping_method->name }}</span>
                                        </td>
                                        @if (Auth::user()->role_id != 3)
                                            <td>
                                                @if ($order->status == 1)
                                                    <span class="badge bg-danger-transparent">در انتظار پرداخت</span>
                                                @endif
                                                @if ($order->status == 2)
                                                    <span class="badge bg-success-transparent">پرداخت شده</span>
                                                @endif
                                                @if ($order->status == 3)
                                                    <span class="badge bg-primary-transparent">آماده سازی</span>
                                                @endif
                                                @if ($order->status == 4)
                                                    <span class="badge bg-primary-transparent">ارسال شده</span>
                                                @endif
                                                @if ($order->status == 5)
                                                    <span class="badge bg-secondary-transparent">تحویل داده شده</span>
                                                @endif
                                            </td>
                                        @else
                                            <td>
                                                <form class="d-flex" method="post"
                                                    action="{{ route('change_status', [$order]) }}">
                                                    @csrf
                                                    <select class="form-select me-2" name="status" id="">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <option value="{{ $i }}"
                                                                {{ $i == $order->status ? 'selected' : '' }}>
                                                                @if ($i == 1)
                                                                    در انتظار
                                                                    پرداخت
                                                                @endif
                                                                @if ($i == 2)
                                                                    پرداخت شده
                                                                @endif
                                                                @if ($i == 3)
                                                                    آماده سازی
                                                                @endif
                                                                @if ($i == 4)
                                                                    ارسال شده
                                                                @endif
                                                                @if ($i == 5)
                                                                    تحویل داده
                                                                    شده
                                                                @endif
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    <button class="btn btn-primary-gradient btn-wave brn-sm">تایید</button>
                                                </form>
                                            </td>
                                        @endif
                                        @php
                                            $total_price = 0;
                                            foreach (
                                                Auth::user()->cart->where('order_id', $order->id)->get()
                                                as $product
                                            ) {
                                                $total_price += $product->price;
                                            }
                                        @endphp
                                        <td>{{ $total_price }}</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                @if ($order->status == 1)
                                                    @if (Auth::user()->role_id == 3 and Auth::user()->id == $order->user_id)
                                                        <a href="{{ route('checkout') }}"
                                                            class="btn btn-icon btn-sm btn-danger-light align-items-center justify-content-center w-100">پرداخت</a>
                                                    @endif
                                                    @if (Auth::user()->role_id != 3)
                                                        <a href="{{ route('checkout') }}"
                                                            class="btn btn-icon btn-sm btn-danger-light align-items-center justify-content-center w-100">پرداخت</a>
                                                    @endif
                                                @else
                                                    <a href="{{ route('order_details', [$order]) }}"
                                                        class="btn btn-icon btn-sm btn-primary-light d-flex align-items-center justify-content-center mx-auto w-100">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> --}}

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
