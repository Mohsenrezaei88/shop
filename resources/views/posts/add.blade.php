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
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن مقاله</h1>
        </div>
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action="{{ route('add_post.post') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4 mt-3">
                            <!-- فرم ورود اطلاعات -->
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="mb-3">
                                                <label class="label-form" for="image">تصویر مقاله</label>
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">نام مقاله</label>
                                                <input value="{{ old('title') }}" name="title" type="text"
                                                    class="form-control @error('title') is-invalid @enderror" id="post-name-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">دسته بندی مقاله</label>
                                                <select name="category_id" id="" class="form-select">
                                                    <option value="">انتخاب کنید</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-text text-danger">
                                                @error('category_id')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <label for="formFile" class="form-label">متن مقاله</label>
                                                <textarea class="form-control @error('body') is-invalid @enderror" rows="5" name="body">{{ old('body') }}</textarea>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="mb-2 mt-3" id="divImage" style="height: 350px">
                                    <img type="image" class="w-100 h-100 rounded"
                                        src="{{ asset('images/default.post.png') }}" alt="p-image" id="p-image">
                                    <p id="post-name" class="text-secondary fw-bold mt-2 fs-6" style="text-align: center">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">
                            افزودن مقاله<i class="bi bi-plus-lg ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        const image = document.getElementById('image')
        const div = document.getElementById('divImage')
        const pImage = document.getElementById('p-image')
        const nameInput = document.getElementById('post-name-input')
        const nameP = document.getElementById('post-name')
        image.addEventListener("change", function(event) {
            const file = event.target.files[0]
            if (file) {
                const reader = new FileReader()
                reader.onload = function(e) {
                    pImage.src = e.target.result
                }
                reader.readAsDataURL(file)
            } else {
                pImage.src = "{{ asset('images/default-category.png') }}"
            }
        })
        nameInput.addEventListener("input", function() {
            nameP.textContent = nameInput.value
        })
    </script>
@endsection
