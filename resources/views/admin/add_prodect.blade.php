@extends('layout.master')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ url('../../assets/libs/quill/quill.snow.css') }}">
        <link rel="stylesheet" href="{{ url('../../assets/libs/quill/quill.bubble.css') }}">
    </head>
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('producsList') }}">محصولات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن محصول</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action = "{{ route('add_product.post') }}" method="Post" id="Qform" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4">
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">نام محصول</label>
                                                <input value="{{ old('name') }}" name="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    id="product-name-add" placeholder="نام">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*نام محصول نباید
                                                    بیشتر از ۳۰ کاراکتر باشد</label>
                                            </div>
                                            <div class="form-text text-danger">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="brand" class="form-label">برند</label>
                                                <select class="form-control @error('brand') is-invalid @enderror"
                                                    data-trigger="" name="brand" id="product-brand-add">
                                                    <option value="">انتخاب کنید</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}"
                                                            {{ $brand->id == old('brand') ? 'selected' : '' }}>
                                                            {{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="category" class="form-label">دسته‌بندی</label>
                                                <select class="form-control @error('category') is-invalid @enderror"
                                                    data-trigger="" name="category" id="product-category-add">
                                                    <option value="">دسته‌بندی</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $category->id == old('category') ? 'selected' : '' }}>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="Inventory" class="form-label">وضعیت موجودی</label>
                                                <div class="row">
                                                    <div class="" id="select-inv">
                                                        <select class="form-control" data-trigger="" name="Inventory"
                                                            id="product-inv">
                                                            <option value="">انتخاب کنید</option>
                                                            <option value="1"
                                                                {{ 1 == old('Inventory') ? 'selected' : '' }}>موجود
                                                            </option>
                                                            <option value="0"
                                                                {{ '0' === old('Inventory') ? 'selected' : '' }}>ناموجود
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xxl-4 d-none" id="number-inv">
                                                        <input
                                                            class="form-control @error('number_inv') is-invalid @enderror"
                                                            value="{{ old('number_inv') }}" type="text"
                                                            placeholder="تعداد" name="number_inv">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="public" class="form-label">وضعیت انتشار</label>
                                                            <select class="form-control @error('name') is-invalid @enderror"
                                                                data-trigger="" name="public" id="product-status-add">
                                                                <option value="">انتخاب کنید</option>
                                                                <option value="1"
                                                                    {{ 1 == old('public') ? 'selected' : '' }}>عمومی
                                                                </option>
                                                                <option value="0"
                                                                    {{ '0' === old('public') ? 'selected' : '' }}>غیر قابل
                                                                    نمایش</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-cost-add" class="form-label">قیمت
                                                                پایه</label>
                                                            <input value="{{ old('price') }}" name="price"
                                                                type="text"
                                                                class="form-control @error('price') is-invalid @enderror"
                                                                id="product-cost-add" placeholder="قیمت">
                                                            <label for="product-cost-add"
                                                                class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*قیمت
                                                                محصول بدون در نطر
                                                                گرفتن ویژگی ها را وارد کنید</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="mb-3">
                                    <div class="col-xl-12">
                                        <label for="product-description-add" class="form-label">توضیحات
                                            محصول</label>
                                        <div style="height: 59%;" id="editor"></div>
                                        <input type="hidden" name="description" id="Qinput">
                                        <label for="product-description-add"
                                            class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*توضیحات نباید
                                            بیشتر از ۵۰۰ حرف باشد</label>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label my-3">تصاویر محصول</label>
                            <div id="my-dropzone" class="dropzone"></div>
                            <label for="my-dropzone" class="form-label mt-1 fs-12 fw-normal text-muted mb-0"
                                id="imageLable">*حداقل 2 فایل باید اضافه شود</label>
                            <script>
                                const deleteUrl = "{{ route('delete_image') }}";
                                const imageLable = document.getElementById("imageLable")
                                const uploadUrl = "{{ route('save_images') }}";
                                const csrf = "{{ csrf_token() }}"
                            </script>
                        </div>
                        <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                            <button type="submit" class="btn btn-primary1 me-2 mb-2 mb-sm-0">افزودن محصول<i
                                    class="bi bi-plus-lg ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @push('scripts')
        <script src="{{ url('../../assets/libs/quill/quill.js') }}"></script>
        <script src="{{ url('../../assets/js/quill-editor.js') }}"></script>
    @endpush
    <script>
        const select = document.getElementById('product-inv')
        const selectDiv = document.getElementById('select-inv')
        const numberDiv = document.getElementById('number-inv')
        select.addEventListener("change", function() {
            if (select.value == 1) {
                selectDiv.classList.add('col-xl-8')
                numberDiv.classList.remove('d-none')
            } else {
                selectDiv.classList.remove('col-xl-8')
                numberDiv.classList.add('d-none')
            }
        })
        if (select.value == 1) {
            selectDiv.classList.add('col-xl-8')
            numberDiv.classList.remove('d-none')
        } else {
            selectDiv.classList.remove('col-xl-8')
            numberDiv.classList.add('d-none')
        }
    </script>
    <script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ asset('assets/js/fileupload.js') }}"></script>
@endsection
