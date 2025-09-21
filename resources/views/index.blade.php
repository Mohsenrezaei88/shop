@extends('layout.master')
@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade py-3 mb-5" style="height: 35%" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('site/slide1.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('site/slide2.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('site/slide3.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('site/slide4.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('site/slide5.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('site/slide6.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('site/slide7.jpg') }}" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">قبلی</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">بعدی</span>
        </button>
    </div>
    <div class="row">
        <div class="col-xxl-12">
            <div class="row pos-category" id="filter">
                <!-- همه دسته بندی ها -->
                <div class="col-xxl col-xl-4 col-md-6">
                    <div class="card custom-card active">
                        <div class="card-body p-3">
                            <a href="javascript:void(0);" class="stretched-link categories" data-filter="*">
                                <div class="d-flex gap-2 categories-content">
                                    <span class="avatar avatar-md">
                                        <img src="{{ asset('images/all_categories.png') }}" alt="">
                                    </span>
                                    <div>
                                        <span class="fw-medium">همه دسته بندی ها</span>
                                        <span class="d-block op-7 fs-12">{{ $products->count() }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- سایر دسته بندی ها -->
                @foreach ($categories as $category)
                    <div class="col-xxl col-xl-4 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body p-3">
                                <a href="javascript:void(0);" class="stretched-link categories"
                                    data-filter=".cat-{{ $category->id }}">
                                    <div class="d-flex gap-2 categories-content">
                                        <span class="avatar avatar-md">
                                            <img src="{{ asset($category->image) }}" alt="">
                                        </span>
                                        <div>
                                            <span class="fw-medium">{{ $category->name }}</span>
                                            <span
                                                class="d-block op-7 fs-12">{{ $products->where('category_id', $category->id)->count() }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- لیست محصولات -->
    <div class="row list-wrapper">
        @foreach ($products as $product)
            @if ($product->attributes->count() > 0)
                <div class="col-xxl-3 col-xl-4 col-md-6 card-item cat-{{ $product->category_id }}">
                    <div class="card custom-card d-flex flex-column p-3" style="height: 440px">
                        <!-- تصویر محصول -->
                        <div class="card-img-top border-bottom border-block-end-dashed position-relative"
                            style="height: 250px;">
                            <div class="img-box-2 h-100 p-2 d-flex align-items-center justify-content-center">
                                <img src="{{ $product->images->first()->url }}" alt="img" class="img-fluid rounded"
                                    style="max-height: 100%; object-fit: contain;">
                            </div>
                        </div>

                        <!-- اطلاعات محصول -->
                        <div class="card-body bg-secondary-transparent rounded-bottom mt-auto d-flex flex-column">
                            <div class="mb-3">
                                <a href="javascript:void(0);" class="fw-medium fs-16">{{ $product->name }}</a>
                                <span class="fs-12 text-muted d-block">{{ $product->category->name }}</span>
                            </div>
                            <div class="mt-auto">
                                <a href="{{ route('productDetails', [$product]) }}"
                                    class="btn btn-primary-gradient btn-wave w-100">مشاهده محصول</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
