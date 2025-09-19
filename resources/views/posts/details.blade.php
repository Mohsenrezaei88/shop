@extends('layout.master')
@section('content')
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">خانه</a></li>
                    <li class="breadcrumb-item"><a href={{ route('posts') }}>پست ها</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0 mt-2">{{ $post->title }}</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xxl-12">
            <div class="card bg-primary-transparent">
                <div class="card-body">
                    <div style="background-image: url({{ asset($post->image) }}); background-size:100% 100%; height:400px"
                        class="card custom-card overflow-hidden job-info-banner">
                    </div>
                    <div class="card custom-card job-info-data mb-2">
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height:70px;">
                            <h5 class="fw-medium mb-0">
                                {{ $post->title }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="card custom-card">
                <div class="card-body">
                    <h6 class="fw-medium">متن مقاله</h6>
                    <p class="op-9">
                        {{ $post->body }}
                    </p>
                    <hr>
                    <h6 class="fw-medium d-inline-block">نویسنده : </h6>
                    <span class="text-secondary">{{ $post->writer->name }}</span>
                </div>
            </div>
        </div>
        <div class="col-xxl-3">
            <div class="mb-1">
                <h6 class="fw-medium mb-3">محصولات مرتبط</h6>
                <div class="swiper swiper-vertical overflow-hidden swiper-related-jobs">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <div class="swiper-slide" style="height: 100px !important">
                                <div class="card custom-card featured-jobs shadow-none border">
                                    <div class="card-body">
                                        <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                            <div>
                                                <span class="avatar avatar-md border p-1">
                                                    <img src="{{ asset($product->images->first()->url) }}" alt="image">
                                                </span>
                                            </div>
                                            <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                <h6 class="fw-medium mb-0 d-flex align-items-center text-truncate w-75"><a
                                                        href="javascript:void(0);">{{ $product->name }}</a></h6>
                                            </div>
                                        </div>
                                        <a href="{{ route('productDetails', [$product]) }}"
                                            class="fw-medium btn btn-sm btn-primary d-grid text-nowrap">
                                            مشاهده محصول
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('../../assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('../../assets/js/job-details.js') }}"></script>
@endsection
