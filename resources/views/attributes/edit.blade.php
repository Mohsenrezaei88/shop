@extends('layout.master')
@section('content')
    <div class="container mt-4">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">برنامه ها</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 my-3">ویرایش ویژگی‌های محصول</h1>
        </div>

        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <form action="{{ route('edit_attr.post') }}" method="post">
                    @csrf
                    <!-- انتخاب محصول -->
                    <label class="form-label">انتخاب محصول</label>
                    <div class="mb-3 w-100 row">
                        <div class="col-xxl-11 p-0 px-1">
                            <select name="product" class="form-select w-100" required>
                                <option value="">-- انتخاب کنید --</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}"
                                        {{ $selectedProduct != null && $product->id == $selectedProduct->id ? 'selected' : '' }}>
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-1 p-0 px-1">
                            <button type="submit" class="btn btn-success-gradient btn-wave w-100">تایید</button>
                        </div>
                    </div>
                </form>
                <!-- ویژگی‌ها -->
                @if ($selectedProduct != null)
                    <form action="{{ route('save_edit_attr.post', [$selectedProduct]) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">ویژگی‌ها</label>
                            <div id="featuresWrapper">
                                @foreach (json_decode($selectedProduct->attributes) as $attr)
                                    <div class="row g-3 mb-3 align-items-center">
                                        <!-- نوع ویژگی -->
                                        <div class="col-md-4 d-flex align-items-center">
                                            <label class="me-2 mb-0 fw-semibold">نوع:</label>
                                            <select class="form-select attribute-select" name="attrs[{{ $attr->id }}][name]"
                                                data-target="value-{{ $attr->id }}">
                                                <option value="">-- انتخاب کنید --</option>
                                                <option value="رنگ" {{ $attr->name == 'رنگ' ? 'selected' : '' }}>رنگ
                                                </option>
                                                <option value="حافظه" {{ $attr->name == 'حافظه' ? 'selected' : '' }}>حافظه
                                                </option>
                                                <option value="رم" {{ $attr->name == 'رم' ? 'selected' : '' }}>رم
                                                </option>
                                                <option value="گارانتی" {{ $attr->name == 'گارانتی' ? 'selected' : '' }}>
                                                    گارانتی
                                                </option>
                                            </select>
                                        </div>

                                        <!-- مقدار -->
                                        <div class="col-md-4 d-flex align-items-center">
                                            <label class="me-2 mb-0 fw-semibold">مقدار:</label>
                                            <input id="value-{{ $attr->id }}" class="form-control color-input @error('attrs[{{ $attr->id }}][value]') is-invalid @enderror"
                                                name="attrs[{{ $attr->id }}][value]"
                                                type="{{ $attr->name == 'رنگ' ? 'color' : 'text' }}"
                                                value="{{ $attr->name == 'رنگ' ? ($attr->value ?: '#000000') : $attr->value }}">
                                        </div>

                                        <!-- قیمت -->
                                        <div class="col-md-4 d-flex align-items-center">
                                            <label class="me-2 mb-0 fw-semibold">قیمت:</label>
                                            <input class="form-control" name="attrs[{{ $attr->id }}][price]" type="text"
                                                value="{{ $attr->price }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit"
                            class="btn btn-primary d-flex justify-content-center align-items-center gap-2 shadow-sm px-4 py-2 w-100">
                            <i class="bi bi-save"></i>
                            ذخیره ویژگی‌ها
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>

    <style>
        .color-input[type="color"] {
            height: calc(1.8rem + 2px);
            /* برابر با ارتفاع form-control */
            padding: 0;
        }
    </style>

    <!-- اسکریپت -->
    <script>
        document.querySelectorAll('.attribute-select').forEach(select => {
            select.addEventListener('change', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);

                if (this.value === 'رنگ') {
                    input.type = 'color';
                    if (!input.value || !input.value.startsWith('#')) {
                        input.value = '#000000'; // مقدار پیش‌فرض رنگ
                    }
                } else {
                    input.type = 'text';
                    input.value = ""; // خالی کردن وقتی از رنگ به چیز دیگه تغییر کرد
                }
            });
        });
    </script>
@endsection
