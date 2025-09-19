@extends('layout.master')
@section('content')

    <head>
        <style>
            .dz-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        </style>
        <link rel="stylesheet" href="{{ url('../../assets/libs/quill/quill.snow.css') }}">
        <link rel="stylesheet" href="{{ url('../../assets/libs/quill/quill.bubble.css') }}">
    </head>
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
            <h1 class="page-title fw-medium fs-18 mb-0">افزودن محصول</h1>
        </div>

        @if ($errors->any())
            <div class="row alert alert-danger svg-danger d-flex align-items-center" role="alert">
                @foreach ($errors->all() as $error)
                    <div class="col-3 d-flex">
                        <svg class="flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            height="1.5rem" viewbox="0 0 24 24" width="1.5rem" fill="#000000">
                            <g>
                                <rect fill="none" height="24" width="24"></rect>
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z">
                                        </path>
                                        <rect height="6" width="2" x="11" y="7"></rect>
                                        <rect height="2" width="2" x="11" y="15"></rect>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div>
                            {{ $error }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <form action = "{{ route('productEdit.post', [$product]) }}" id="Qform" method="Post"
        enctype="multipart/form-data">
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
                                                <input value="{{ $product->name }}" name="name" type="text"
                                                    class="form-control" id="product-name-add" placeholder="نام">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*نام محصول نباید
                                                    بیشتر از ۳۰ کاراکتر باشد</label>
                                            </div>
                                            <div class="form-text text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="brand" class="form-label">برند</label>
                                                <select class="form-control" data-trigger="" name="brand"
                                                    id="product-brand-add">
                                                    <option value="">انتخاب کنید</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}"
                                                            {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                                            {{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="category" class="form-label">دسته‌بندی</label>
                                                <select class="form-control" data-trigger="" name="category"
                                                    id="product-category-add">
                                                    <option value="">دسته‌بندی</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
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
                                                                {{ $product->Inventory > 0 ? 'selected' : '' }}>موجود
                                                            </option>
                                                            <option value="0"
                                                                {{ $product->Inventory <= 0 ? 'selected' : '' }}>ناموجود
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xxl-4 d-none" id="number-inv">
                                                        <input class="form-control" value="{{ $product->Inventory }}"
                                                            type="text" placeholder="تعداد" name="number_inv">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="public" class="form-label">وضعیت انتشار</label>
                                                            <select class="form-control" data-trigger="" name="public"
                                                                id="product-status-add">
                                                                <option value="">انتخاب کنید</option>
                                                                <option value="1"
                                                                    {{ 1 == $product->public ? 'selected' : '' }}>عمومی
                                                                </option>
                                                                <option value="0"
                                                                    {{ 0 == $product->public ? 'selected' : '' }}>غیر قابل
                                                                    نمایش</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12 mb-3">
                                                            <label for="product-cost-add" class="form-label">قیمت
                                                                پایه</label>
                                                            <input value="{{ $product->price }}" name="price"
                                                                type="text" class="form-control" id="product-cost-add"
                                                                placeholder="قیمت">
                                                            <label for="product-cost-add"
                                                                class="form-label mt-1 fs-12 fw-normal text-muted mb-0">قیمت
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
                                <div class="col-xl-12">
                                    <label for="product-description-add" class="form-label">توضیحات
                                        محصول</label>
                                    <div style="height: 59%;" id="editor">{!! $product->description !!}</div>
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
                            const files = @json($files);
                            const imageLable = document.getElementById("imageLable");
                            const uploadUrl = "{{ route('save_images') }}";
                            const csrf = "{{ csrf_token() }}"
                        </script>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">ویرایش محصول<i
                                class="ri-edit-line ms-2"></i></button>
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
