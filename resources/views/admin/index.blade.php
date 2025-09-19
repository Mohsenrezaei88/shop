@extends('layout.master')
@section('content')
    <!-- Start::page-header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">
                        خانه
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">پنل ادمین</li>
            </ol>
            <h1 class="page-title fw-medium fs-18 mb-0">پنل ادمین</h1>
        </div>
    </div>

    <!-- End::page-header -->

    <!-- Start:: row-1 -->
    <div class="row">
        <div class="col-xl-8">
            <div class="row">
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="text-muted d-block mb-1">مجموع محصولات</span>
                                    <h4 class="fw-medium mb-0">{{ $products->count() }}</h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary">
                                        <i class="ti ti-shopping-cart fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="d-block text-muted mb-1">مجموع کاربران</span>
                                    <h4 class="fw-medium mb-0">{{ $users->count() }}</h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary1">
                                        <i class="ti ti-users fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="text-muted d-block mb-1">مجموع دسته بندی ها</span>
                                    <h4 class="fw-medium mb-0">{{ $categories->count() }}</h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-category-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 4h6v6h-6zm10 0h6v6h-6zm-10 10h6v6h-6zm10 3h6m-3 -3v6" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card custom-card overflow-hidden main-content-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="text-muted d-block mb-1">کل درآمد</span>
                                    <h4 class="fw-medium mb-0">{{ number_format($total_price) }}</h4>
                                </div>
                                <div class="lh-1">
                                    <span class="avatar avatar-md avatar-rounded bg-primary2">
                                        <i class="ti ti-currency-dollar fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-6">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header pb-0 justify-content-between">
                            <div class="card-title">
                                آمار سفارشات
                            </div>
                        </div>

                        <div class="card-body py-4 px-3">
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-md bg-primary-transparent">
                                    <i class="ti ti-trending-up fs-5"></i>
                                </div>
                                <div class="flex-fill d-flex align-items-start justify-content-between">
                                    <div>
                                        <span class="fs-11 mb-1 d-block fw-medium">کل سفارشات</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0 d-flex align-items-center">{{ $total_orders->count() }}</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="orders" class="my-2"></div>
                        </div>
                        <div class="card-footer border-top border-block-start-dashed">
                            <div class="d-grid">
                                <button
                                    class="btn btn-primary-ghost btn-wave fw-medium waves-effect waves-light table-icon">
                                    آمار کامل
                                    <i class="ti ti-arrow-narrow-right ms-2 fs-16 d-inline-block align-middle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card main-dashboard-banner overflow-hidden">
                        <div class="card-body p-4 py-5">
                            <div class="row justify-content-between">
                                <div class="col-xxl-7 col-xl-5 col-lg-5 col-md-5 col-sm-5">
                                    <h4 class="mb-3 fw-medium text-fixed-white">برگشت به فروشگاه</h4>
                                    <p class="mb-4 text-fixed-white">بازگشت به فروشگاه و ادامه خرید</p>
                                    <a href="{{ route('index') }}"
                                        class="fw-medium text-fixed-white text-decoration-underline">
                                        بازگشت
                                        <i class="ti ti-arrow-narrow-left align-middle d-inline-flex"></i>
                                    </a>
                                </div>
                                <div
                                    class="col-xxl-4 col-xl-7 col-lg-7 col-md-7 col-sm-7 d-sm-block d-none text-end my-auto">
                                    <img src="../../assets/images//media/media-86.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                دسته‌های پرفروش
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="progress-stacked progress-sm mb-2 gap-1">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($sell_categories as $key => $category)
                                        @if ($category != 0)
                                            <div class="progress-bar bg-primary{{ $i }}" role="progressbar"
                                                style="width: {{ 100 / ($total_price / $category) }}%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                            @php
                                                $i++;
                                            @endphp
                                        @endif
                                    @endforeach
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div>مجموع فروش</div>
                                    <div class="h6 mb-0">{{ number_format($total_price) }}</div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($sell_categories as $key => $category)
                                            <tr>
                                                <td>
                                                    <span
                                                        class="d-inline-block bg-primary{{ $i }} rounded-circle align-middle"
                                                        style=";width: 14px; height: 14px;"></span>
                                                    {{ $key }}
                                                </td>
                                                <td>
                                                    <span class="fw-medium">{{ number_format($category) }}</span>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('../../assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('../../assets/js/sales-dashboard.js') }}"></script>
    <script>
        var options = {
            series: [{{ $total_orders->where('status', 1)->count() }},
                {{ $total_orders->where('status', 2)->count() }},
                {{ $total_orders->where('status', 3)->count() }},
                {{ $total_orders->where('status', 4)->count() }},
            ],
            labels: ["پرداخت نشده", "پرداخت شده", "در حال آماده سازی", "ارسال شده", "تحویل داده شده"],
            chart: {
                height: 199,
                type: 'donut',
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
                height: 50,
                markers: {
                    width: 8,
                    height: 8,
                    radius: 2,
                },
                offsetY: 10,
            },
            stroke: {
                show: true,
                curve: 'smooth',
                lineCap: 'round',
                colors: "#fff",
                width: 0,
                dashArray: 0,
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 90,
                    offsetY: 10,
                    expandOnClick: false,
                    donut: {
                        size: '80%',
                        background: 'transparent',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: '20px',
                                color: '#495057',
                                offsetY: -25
                            },
                            value: {
                                show: true,
                                fontSize: '15px',
                                color: undefined,
                                offsetY: -20,
                                formatter: function(val) {
                                    return val + "%"
                                }
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: 'کل',
                                fontSize: '22px',
                                fontWeight: 600,
                                color: '#495057',
                            }

                        }
                    }
                }
            },
            grid: {
                padding: {
                    bottom: -100
                }
            },
            colors: ["color(xyz-d65 0.33 0.19 0.1 / 0.98)", "rgba(227, 84, 212, 1)", "rgba(255, 93, 159, 1)",
                "rgba(255, 142, 111, 1)" , "var(--primary-color)"
            ],
        };
        var chart = new ApexCharts(document.querySelector("#orders"), options);
        chart.render();
    </script>
    <!-- End:: row-1 -->
@endsection
