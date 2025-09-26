@extends('layout.master')
@section('content')
@push('hide')
            <div class="header-element mx-lg-0 mx-2">
                <a aria-label="Hide Sidebar"
                   class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle p-2"
                   data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
            </div>
@endpush
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="{{ route('index') }}" class="header-logo">
                <img src="../../assets/images/brand-logos/desktop-logo.png" alt="logo"
                     class="desktop-logo">
                <img src="../../assets/images/brand-logos/toggle-dark.png" alt="logo"
                     class="toggle-dark">
                <img src="../../assets/images/brand-logos/desktop-dark.png" alt="logo"
                     class="desktop-dark">
                <img src="../../assets/images/brand-logos/toggle-logo.png" alt="logo"
                     class="toggle-logo">
                <img src="../../assets/images/brand-logos/toggle-white.png" alt="logo"
                     class="toggle-white">
                <img src="../../assets/images/brand-logos/desktop-white.png" alt="logo"
                     class="desktop-white">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                         viewbox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu">
                    <li class="slide__category"><span class="category-name">اصلی</span></li>
                    <li class="slide">
                        <a href="{{ route('index') }}" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            <span class="side-menu__label">خانه</span>
                        </a>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="w-5 h-4 side-menu__icon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M7 3m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path
                                    d="M4.012 7.26a2.005 2.005 0 0 0 -1.012 1.737v10c0 1.1 .9 2 2 2h10c.75 0 1.158 -.385 1.5 -1" />
                                <path d="M11 7h5" />
                                <path d="M11 10h6" />
                                <path d="M11 13h3" />
                            </svg>


                            <span class="side-menu__label">مقالات</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="{{ route('add_post') }}" class="side-menu__item">افزودن مقاله</a>
                                <a href="{{ route('posts_list') }}" class="side-menu__item">لیست مقالات</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                               fill="#7b8191" width="24" height="24" viewbox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                        </path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
        <div style="margin-right: 250px">
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">مقالات</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">مقاله های من</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start:: row-1 -->
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
                                    <div class="p-3 border-top border-block-start-dashed w-100">
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="w-100 row">
                                                <div class="col px-2">
                                                    <a href="{{ route('post_details', [$post]) }}"
                                                       class="btn btn-primary btn-glare w-100">مشاهده</a>
                                                </div>
                                                <div class="col px-2">
                                                    <a href="{{route('delete_post' , [$post])}}" class="btn btn-danger-gradient btn-wave waves-effect waves-light w-100">حذف</a>
                                                </div>
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
    </div>
@endsection
