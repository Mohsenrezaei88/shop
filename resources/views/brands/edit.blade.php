@extends('layout.master')
@section('content')
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">برنامه ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن برند</h1>
        </div>
 
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action="{{ route('edit_brand.post' , [$brand]) }}" method="Post">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4">
                            <!-- فرم ورود اطلاعات -->
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">نام برند</label>
                                                <input value="{{ $brand->name }}" name="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="product-name-add" placeholder="نام">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">
                                                    *نام برند نباید بیشتر از ۳۰ کاراکتر باشد
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                       <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">ویرایش برند <i
                                class="ri-edit-line ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
