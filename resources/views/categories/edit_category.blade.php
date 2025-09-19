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
            <h1 class="page-title fw-medium fs-18 mb-0">ویرایش دسته بندی</h1>
        </div>
 
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action="{{ route('edit_category.post', [$category]) }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4">
                            <!-- فرم ورود اطلاعات -->
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">نام دسته بندی</label>
                                                <input value="{{ $category->name }}" name="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="product-name-add" placeholder="نام">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">
                                                    *نام دسته بندی نباید بیشتر از ۳۰ کاراکتر باشد
                                                </label>
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="formFile" class="form-label">تصویر جدید دسته
                                                    بندی(اختیاری)</label>
                                                <input name="image" class="form-control @error('image') is-invalid @enderror" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- پیش نمایش -->
                            <!-- پیش نمایش -->
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card text-center">
                                    <div class="card-body">
                                        <div id="preview-container" class="d-flex flex-column align-items-center">
                                            <img id="preview-image"
                                                src="{{ $category->image ? asset($category->image) : asset('images/default-category.png') }}"
                                                alt="پیش‌نمایش تصویر" class="img-fluid mb-3 rounded-5"
                                                style="max-height: 200px; object-fit: contain;">
                                            <h5 id="preview-name" class="fw-bold text-muted">
                                                {{ $category->name }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">ویرایش دسته بندی<i
                                class="ri-edit-line ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- اسکریپت برای پیش‌نمایش --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputFile = document.getElementById("formFile");
            const inputName = document.getElementById("product-name-add");
            const previewImage = document.getElementById("preview-image");
            const previewName = document.getElementById("preview-name");

            // تغییر تصویر
            inputFile.addEventListener("change", function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewImage.src = "{{ asset('images/default-category.png') }}";
                }
            });

            // تغییر نام دسته بندی
            inputName.addEventListener("input", function() {
                previewName.textContent = inputName.value;
            });
        });
    </script>
@endsection
