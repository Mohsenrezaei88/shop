@extends('layout.master')
@section('content')
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">مقالات</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">مقالات</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start:: row-1 -->
    @can('writer', 'App\\Models\User')
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex gap-4 align-items-center flex-wrap">
                                <div class="d-flex gap-2 kanban-board">
                                    <a href="{{ route('add_post') }}" class="btn btn-primary btn-w-lg"><i class="ri-add-line me-1 fw-medium align-middle"></i>مقاله
                                        جدید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <!-- End:: row-1 -->

    <!-- Start::row-2 -->
    <div class="TASK-kanban-board">
        <div class="kanban-tasks-type new">
            <div class="kanban-tasks" id="new-tasks">
                <div id="new-tasks-draggable" data-view-btn="new-tasks">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="mb-3 w-100">
                                            <div class="d-flex justify-content-center align-items-center rounded position-relative overflow-hidden text-white"
                                                style="height:30px;">
                                                <img src="{{ asset('site/media-36.jpg') }}"
                                                    class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                                    alt="bg">
                                                <span class="position-relative fw-bold fs-6">{{ $post->title }}</span>
                                            </div>
                                            <div class="mt-2" style="height: 280px ;">
                                                <img class="w-100 h-100 rounded" src="{{ asset($post->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="kanban-task-description text-truncate">{{ $post->body }}</p>
                                    </div>
                                    <div class="p-3 border-top border-block-start-dashed">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <a href="{{ route('post_details', [$post]) }}"
                                                    class="btn btn-primary btn-glare">مشاهده</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!--End::row-2 -->

    <!-- Start::add board modal -->
    <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">افزودن برد</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <label for="board-title" class="form-label">عنوان تابلو</label>
                            <input type="text" class="form-control" id="board-title" placeholder="عنوان برد">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-primary">افزودن برد</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End::add board modal -->

    <!-- Start::افزودن وظیفه modal -->
    <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">افزودن وظیفه</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gy-2">
                        <div class="col-xl-6">
                            <label for="task-name" class="form-label">نام وظیفه</label>
                            <input type="text" class="form-control" id="task-name" placeholder="نام وظیفه">
                        </div>
                        <div class="col-xl-6">
                            <label for="task-id" class="form-label">شناسه وظیفه</label>
                            <input type="text" class="form-control" id="task-id" placeholder="شناسه وظیفه">
                        </div>
                        <div class="col-xl-12">
                            <label for="text-area" class="form-label">توضیحات وظیفه</label>
                            <textarea class="form-control" id="text-area" rows="2" placeholder="نوشتن توضیحات"></textarea>
                        </div>
                        <div class="col-xl-12">
                            <label for="text-area" class="form-label">تصاویر وظیفه</label>
                            <input type="file" class="multiple-filepond" name="filepond" multiple=""
                                data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">تخصیص به</label>
                            <select class="form-control" name="choices-multiple-remove-button1"
                                id="choices-multiple-remove-button1" multiple="">
                                <option value="Choice 1">طاها</option>
                                <option value="Choice 2">سارا </option>
                                <option value="Choice 3"> مهدی</option>
                                <option value="Choice 4"> کیمیا</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">تاریخ هدف</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control" id="targetDate"
                                        placeholder="انتخاب تاریخ و زمان">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">برچسب‌ها</label>
                            <select class="form-control" name="choices-multiple-remove-button2"
                                id="choices-multiple-remove-button2" multiple="">
                                <option value="">انتخاب برچسب</option>
                                <option value="UI/UX">UI/UX</option>
                                <option value="Marketing">بازاریابی</option>
                                <option value="Finance">مالی</option>
                                <option value="طراحی کردن">طراحی کردن</option>
                                <option value="Admin">مدیریت</option>
                                <option value="Authentication">احراز هویت</option>
                                <option value="Product">محصول</option>
                                <option value="توسعه">توسعه</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn m-0 me-2 btn-primary1-light"
                        data-bs-dismiss="modal">انصراف</button>
                    <button type="button" class="btn m-0 btn-primary">افزودن وظیفه</button>
                </div>
            </div>
        </div>
    </div>
@endsection
