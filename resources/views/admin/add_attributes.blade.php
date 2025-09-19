@extends('layout.master')
@section('content')
<div class="container mt-4">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">خانه</a></li>
                <li class="breadcrumb-item"><a href="{{ route('producsList') }}">محصولات</a></li>
                <li class="breadcrumb-item active" aria-current="page">افزودن ویژگی های محصول</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 my-3">افزودن ویژگی‌های محصول</h1>
    </div>

    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <form action="{{ route('add_attributes.post') }}" method="post">
                @csrf

                <!-- انتخاب محصول -->
                <div class="mb-3">
                    <label class="form-label">انتخاب محصول</label>
                    <select name="product" class="form-select" required>
                        <option value="">-- انتخاب کنید --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}"
                                {{ $product->id == $selectedProduct ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- ویژگی‌ها -->
                <div class="mb-3">
                    <label class="form-label">ویژگی‌ها</label>
                    <div id="featuresWrapper"></div>
                    <button type="button" class="btn btn-primary me-2 mb-2 mb-sm-0" onclick="addFeature()">+ افزودن ویژگی</button>
                </div>

                <button type="submit"
                    class="btn btn-primary d-flex justify-content-center align-items-center gap-2 shadow-sm px-4 py-2 w-100">
                    <i class="bi bi-save"></i>
                    ذخیره ویژگی‌ها
                </button>
            </form>
        </div>
    </div>
</div>

<script>
function addFeature() {
    const wrapper = document.getElementById("featuresWrapper");
    const div = document.createElement("div");
    div.classList.add("row", "g-2", "mb-2");

    div.innerHTML = `
        <div class="col-md-3">
            <select class="form-select attribute-select" name="attribute[]" required onchange="updateValueInput(this)">
                <option value="">-- نوع ویژگی --</option>
                <option value="رنگ">رنگ</option>
                <option value="حافظه">حافظه</option>
                <option value="رم">رم</option>
                <option value="گارانتی">گارانتی</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control attribute-value" placeholder="مقدار" name="attribute_value[]" required>
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" placeholder="قیمت مازاد(تومان)" name="attribute_price[]" min="0">
        </div>
        <div class="col-md-2 d-grid">
            <button type="button" class="btn btn-danger" onclick="this.closest('.row').remove()">×</button>
        </div>
    `;
    wrapper.appendChild(div);
}

function updateValueInput(selectElement) {
    const row = selectElement.closest('.row');
    const oldInput = row.querySelector('.attribute-value');

    if (selectElement.value === 'رنگ') {
        if (oldInput.type !== 'color') {
            const colorInput = document.createElement('input');
            colorInput.type = 'color';
            colorInput.className = 'form-control attribute-value';
            colorInput.name = 'attribute_value[]';
            colorInput.value = oldInput.value.startsWith('#') ? oldInput.value : '#ff0000';
            // استایل یکنواخت
            colorInput.style.height = oldInput.offsetHeight + 'px';
            oldInput.replaceWith(colorInput);
        }
    } else {
        if (oldInput.type === 'color') {
            const textInput = document.createElement('input');
            textInput.type = 'text';
            textInput.className = 'form-control attribute-value';
            textInput.name = 'attribute_value[]';
            textInput.placeholder = 'مقدار';
            textInput.value = '';
            oldInput.replaceWith(textInput);
        }
    }
}
</script>

<style>
/* یکنواخت کردن ارتفاع color picker */
input[type="color"] {
    padding: 0;
    border: 1px solid #ced4da;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}
</style>
@endsection
