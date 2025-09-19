@extends('layout.master')
@section('content')
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">اپلیکیشن‌ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">تجارت الکترونیک</a></li>
                    <li class="breadcrumb-item active" aria-current="page">جزئیات سفارش</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">جزئیات سفارش</h1>
        </div>
 
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <span class="badge bg-primary-transparent">
                                    زمان تحویل تقریبی : {{ $order->created_at_shamsi_after_five_days }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">کالا</th>
                                            <th scope="col">قیمت</th>
                                            <th scope="col">تعداد</th>
                                            <th scope="col">قیمت کل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total_number = 0;
                                            $total_price = 0;
                                        @endphp
                                        @foreach (Auth::user()->cart->where('order_id', $order->id)->get() as $product)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xl bg-primary-transparent">
                                                                <img src="{{ asset($product->product->images->first()->url) }}"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="mb-1 fs-14 fw-medium">
                                                                <a
                                                                    href="javascript:void(0);">{{ $product->product->name }}</a>
                                                            </div>
                                                            @foreach (json_decode($product->attributes) as $key => $value)
                                                                <div class="mb-1">
                                                                    <span
                                                                        class="me-1 d-inline-block">{{ $key }}</span>
                                                                    @if ($key != 'رنگ')
                                                                        <span class="text-muted">{{ $value }}</span>
                                                                </div>
                                                            @else
                                                                <span class="d-inline-block rounded-circle align-middle"
                                                                    style="background-color: {{ $value }}; width: 14px; height: 14px;"></span>
                                                                <input type="hidden" name="selected_color"
                                                                    value="{{ $value }}">
                                                        </div>
                                        @endif
                                        @endforeach
                            </div>
                        </div>
                        </td>
                        <td>
                            <span class="fs-15 fw-semibold">{{ $product->price / $product->number }}</span>
                        </td>
                        <td>{{ $product->number }}</td>
                        @php
                            $total_number += $product->number;
                            $total_price += $product->price;
                        @endphp
                        <td>{{ $product->price }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer border-top-0 d-flex align-items-center justify-content-between gap-2">
                    <button class="btn btn-primary-light btn-wave" onclick="javascript:window.print();">
                        <i class="ri-printer-line me-1 align-middle d-inline-block"></i>چاپ
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-4">
        <div class="card custom-card">
            <div class="card-body">
                <p class="mb-4">
                    <span class="fw-medium me-2 fs-14">وضعیت :</span>
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
                </p>
                <div class="order-track mt-1">
                    @for ($i = 2; $i <= $order->status; $i++)
                        @if ($i == 2)
                            <div class="accordion" id="basicAccordion">
                                <div class="accordion-item border-0 bg-transparent mb-3">
                                    <div class="accordion-header" id="headingOne">
                                        <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true"
                                            aria-controls="basicOne">
                                            <div class="d-flex mb-0 lh-1">
                                                <div class="me-2">
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary border-opacity-10 bg-primary-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M5 12l5 5l10 -10" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill d-flex align-items-center justify-content-between">
                                                    <p class="fw-medium mb-0 fs-14">پرداخت شده</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="basicOne" class="accordion-collapse collapse show border-top-0"
                                        aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                        <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                            <div class="">
                                                <p class="mb-0">سفارش با موفقیت پرداخت شد</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($i == 3)
                            <div class="accordion" id="basicAccordion">
                                <div class="accordion-item border-0 bg-transparent mb-3">
                                    <div class="accordion-header" id="headingOne">
                                        <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true"
                                            aria-controls="basicOne">
                                            <div class="d-flex mb-0 lh-1">
                                                <div class="me-2">
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary border-opacity-10 bg-primary-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-gradienter">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M3.227 14c.917 4 4.497 7 8.773 7c4.277 0 7.858 -3 8.773 -7" />
                                                            <path
                                                                d="M20.78 10a9 9 0 0 0 -8.78 -7a8.985 8.985 0 0 0 -8.782 7" />
                                                            <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill d-flex align-items-center justify-content-between">
                                                    <p class="fw-medium mb-0 fs-14">در حال آماده سازی</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="basicOne" class="accordion-collapse collapse show border-top-0"
                                        aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                        <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                            <div class="">
                                                <p class="mb-0">سفارش در حال آماده سازی است</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($i == 4)
                            <div class="accordion" id="basicAccordion">
                                <div class="accordion-item border-0 bg-transparent mb-3">
                                    <div class="accordion-header" id="headingOne">
                                        <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true"
                                            aria-controls="basicOne">
                                            <div class="d-flex mb-0 lh-1">
                                                <div class="me-2">
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary border-opacity-10 bg-primary-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-truck">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                            <path
                                                                d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill d-flex align-items-center justify-content-between">
                                                    <p class="fw-medium mb-0 fs-14">ارسال شده</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="basicOne" class="accordion-collapse collapse show border-top-0"
                                        aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                        <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                            <div class="">
                                                <p class="mb-0">سفارش به سمت مقصد ارسال شده است</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($i == 5)
                            <div class="accordion" id="basicAccordion">
                                <div class="accordion-item border-0 bg-transparent mb-3">
                                    <div class="accordion-header" id="headingOne">
                                        <a class="px-0 pt-0" href="javascript:void(0)" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true"
                                            aria-controls="basicOne">
                                            <div class="d-flex mb-0 lh-1">
                                                <div class="me-2">
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary border-opacity-10 bg-primary-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-hearts">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M14.017 18l-2.017 2l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784" />
                                                            <path
                                                                d="M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 0 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill d-flex align-items-center justify-content-between">
                                                    <p class="fw-medium mb-0 fs-14">تحویل داده شده</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="basicOne" class="accordion-collapse collapse show border-top-0"
                                        aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                        <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                            <div class="">
                                                <p class="mb-0">سفارش به مشتری تحویل داده شده است</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    خلاصه سفارش
                </div>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="fw-semibold">کل اقلام :</div>
                            </td>
                            <td>
                                {{ $total_number }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fw-semibold">قیمت کل :</div>
                            </td>
                            <td>
                                <span>{{ $total_price }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fw-semibold">هزینه ارسال :</div>
                            </td>
                            <td>
                                <span class="text-danger">{{ $order->shipping_method->price }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fw-semibold">پرداختی :</div>
                            </td>
                            <td>
                                <span class="fs-20 fw-semibold">{{ $total_price + $order->shipping_method->price }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
@endsection
