<html lang="fa" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark"
    data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="قالب HTML داشبورد مدیریتی xintra">
    <meta name="Author" content="قالب HTML داشبورد مدیریتی xintra">
    <meta name="keywords" content="قالب HTML داشبورد مدیریتی xintra">

    <!-- Title -->
    <title>مدیریت</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ url('../.../../assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/libs/dropzone/dropzone.css') }}">

    <!-- Start::Styles -->

    <!-- Choices JS -->
    <script src="{{ url('../../assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ url('../../assets/js/main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ url('../../assets/libs/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ url('../../assets/css/styles.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ url('../../assets/css/icons.css') }}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ url('../../assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ url('../../assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ url('../../assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ url('../../assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ url('../../assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{ url('../../assets/libs/flatpickr/flatpickr.min.css') }}">

    <!-- Auto Complete CSS -->
    <link rel="stylesheet" href="{{ url('../../assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css') }}">
    <!-- End::Styles -->

    <link rel="stylesheet" href="{{ url('../../assets/libs/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ url('../../assets/libs/quill/quill.bubble.css') }}">
    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{ url('../../assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('../../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('../../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <link rel="stylesheet" href="{{ url('../../assets/libs/flatpickr/flatpickr.min.css') }}">


    <link rel="stylesheet" href="{{ url('../../assets/libs/glightbox/css/glightbox.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ url('../../assets/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('../../assets/libs/prismjs/themes/prism-coy.min.css') }}">
</head> <!-- Date & Time Picker CSS -->

<body class="">

    <!-- Switcher -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom d-block p-0">
            <div class="d-flex align-items-center justify-content-between p-3">
                <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">تنظیمات</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <nav class="border-top border-block-start-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">تنظیمات قالب</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">رنگ قالب</button>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">حالت رنگ قالب:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        روشن
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-light-theme" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        تیره
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">جهت:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        چپ به راست
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-ltr" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        راست به چپ
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">قالب ناوبری:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        عمودی
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-vertical" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        افقی
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">سبک های منوی عمودی و افقی:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        منو کلیک کنید
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        منو شناور
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        نماد کلیک کنید
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        نماد شناور
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">سبک های چیدمان منوی جانبی:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        پیش فرض
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        منو بسته
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        آیکن متنی
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        آیکن
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        جدا شده
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        منو جفتی
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">سبک های صفحه:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        منظم
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-regular" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        کلاسیک
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        مدرن
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">سبک های عرض طرح:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        تمام صفحه
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-full-width" checked="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        جعبه ای
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">موقعیت های منو:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        ثابت
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-fixed" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        قابل پیمایش
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">موقعیت های سرصفحه:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        ثابت
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        قابل پیمایش
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">لودر:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        فعال
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        غیرفعال
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">رنگ های منو:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked="">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">توجه: اگر می خواهید رنگ را تغییر دهید، منو به صورت
                                پویا تغییر می کند از زیر انتخابگر رنگ اصلی تم</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">رنگ‌های سرصفحه:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio"
                                        name="header-colors" id="switcher-header-light" checked="">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio"
                                        name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio"
                                        name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header"
                                        type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header"
                                        type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">توجه: اگر می‌خواهید رنگ هدر را به صورت پویا تغییر
                                دهید، از انتخابگر رنگ اصلی قالب در زیر تغییر دهید.</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">رنگ اصلی:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary" onchange="updateChartColor(this.value)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">قالب پس زمینه:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">منو با تصویر پس زمینه:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="menu-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="menu-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="menu-background" id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="menu-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="menu-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-nowrap gap-2">
                    <a href="https://www.rtl-theme.com/author/hogondesign/products/" target="_blank"
                        class="btn btn-primary text-nowrap">خرید</a>
                    <a href="https://www.rtl-theme.com/author/hogondesign/products/" target="_blank"
                        class="btn btn-secondary text-nowrap">نمونه کار</a>
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger text-nowrap">بازنشانی</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End switcher -->

    <!-- Loader -->
    <div id="loader">
        <img src="../../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">

        <!-- Start::main-header -->

        <header class="app-header sticky p-0" id="header">
            @if (!Auth::check())
                <div class="main-header-container container-fluid">

                    <!-- Start::header-content-left -->
                    <div class="header-content-left">
                        <div class="header-element">
                            <a href="{{ route('login') }}" class="btn btn-primary mx-1" type="button">ورود</a>
                            <a href="{{ route('register') }}" class="btn btn-primary mx-1" type="button">ثبت
                                نام</a>
                        </div>
                    </div>
                @else
                    <!-- Start::main-header-container -->
                    @if (Auth::user()->role_id != 3)
                        <div class="main-header-container container-fluid">

                            <!-- Start::header-content-left -->
                            <div class="header-content-left">
                                {{-- <!-- Start::header-element -->
							<div class="header-element">
								<div class="horizontal-logo">
									<a href="index.html" class="header-logo">
										<img src="./assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
										<img src="./assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
										<img src="./assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
										<img src="./assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
										<img src="./assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
										<img src="./assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
									</a>
								</div>
							</div>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<div class="header-element mx-lg-0 mx-2">
								<a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
							</div>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
								<!-- Start::header-link -->
								<input type="text" class="header-search-bar form-control" id="header-search" placeholder="جستجو" spellcheck="false" autocomplete="off" autocapitalize="off">
								<a href="javascript:void(0);" class="header-search-icon border-0">
									<i class="ri-search-line"></i>
								</a>
								<!-- End::header-link -->
							</div>
							<!-- End::header-element --> --}}
                            </div>
                    @endif
                    @if (Auth::user()->role_id == 3)
                        <div class="main-header-container container-fluid">

                            <!-- Start::header-content-left -->
                            <div style="margin-right: 250px" class="header-content-left">
                                {{-- <!-- Start::header-element -->
							<div class="header-element">
								<div class="horizontal-logo">
									<a href="index.html" class="header-logo">
										<img src="./assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
										<img src="./assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
										<img src="./assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
										<img src="./assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
										<img src="./assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
										<img src="./assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
									</a>
								</div>
							</div>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<div class="header-element mx-lg-0 mx-2">
								<a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
							</div>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
								<!-- Start::header-link -->
								<input type="text" class="header-search-bar form-control" id="header-search" placeholder="جستجو" spellcheck="false" autocomplete="off" autocapitalize="off">
								<a href="javascript:void(0);" class="header-search-icon border-0">
									<i class="ri-search-line"></i>
								</a>
								<!-- End::header-link -->
							</div>
							<!-- End::header-element --> --}}
                                <div class="header-element mx-lg-0 mx-2">
                                    <a aria-label="Hide Sidebar"
                                        class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle p-2"
                                        data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                                </div>
                            </div>
                    @endif
            @endif

            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <ul class="header-content-right">

                <!-- Start::header-element -->
                <li class="header-element d-md-none d-block">
                    <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                        data-bs-target="#header-responsive-search">
                        <!-- Start::header-link-icon -->
                        <i class="bi bi-search header-link-icon d-flex"></i>
                        <!-- End::header-link-icon -->
                    </a>
                </li>
                <!-- End::header-element -->
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <li class="header-element header-theme-mode">
                    <!-- Start::header-link|layout-setting -->
                    <a href="javascript:void(0);" class="header-link layout-setting">
                        <span class="light-layout">
                            <!-- Start::header-link-icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z">
                                </path>
                            </svg>
                            <!-- End::header-link-icon -->
                        </span>
                        <span class="dark-layout">
                            <!-- Start::header-link-icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z">
                                </path>
                            </svg>
                            <!-- End::header-link-icon -->
                        </span>
                    </a>
                    <!-- End::header-link|layout-setting -->
                </li>
                <li class="header-element">
                    <!-- Start::header-link|layout-setting -->
                    <a href="{{ route('posts') }}" class="header-link layout-setting">
                        <span>
                            <!-- Start::header-link-icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 header-link-icon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M7 3m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path
                                    d="M4.012 7.26a2.005 2.005 0 0 0 -1.012 1.737v10c0 1.1 .9 2 2 2h10c.75 0 1.158 -.385 1.5 -1" />
                                <path d="M11 7h5" />
                                <path d="M11 10h6" />
                                <path d="M11 13h3" />
                            </svg>
                            <!-- End::header-link-icon -->
                        </span>
                    </a>
                    <!-- End::header-link|layout-setting -->
                </li>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                @if (Auth::check())
                    <li class="header-element cart-dropdown dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z">
                                </path>
                            </svg>
                            @if (Auth::user()->cart != null and
                                    Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->get()->count() >
                                        0)
                                <span class="badge bg-secondary rounded-pill header-icon-badge"
                                    id="cart-icon-badge">{{ Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->get()->count() }}</span>
                            @else
                                <span class="badge bg-secondary rounded-pill header-icon-badge"
                                    id="cart-icon-badge">0</span>
                            @endif
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                            data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    @if (Auth::user()->cart != null and
                                            Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->get()->count() >
                                                0)
                                        <p class="mb-0 fs-15 fw-medium">اقلام سبد خرید<span
                                                class="badge bg-primary2 text-fixed-white ms-1 fs-12 rounded-circle"
                                                id="cart-data">{{ Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->count() }}</span>
                                        </p>
                                    @endif
                                    @if (Auth::user()->cart != null and Auth::user()->cart->where('order_id', null)->get()->count() > 0)
                                        <div class="d-flex align-items-center gap-2">
                                            @php
                                                $price = 0;
                                                foreach (
                                                    Auth::user()
                                                        ->cart->where('order_id', null)
                                                        ->where('user_id', Auth::user()->id)
                                                        ->get()
                                                    as $product
                                                ) {
                                                    $price += $product->price;
                                                }
                                            @endphp
                                            <span class="fs-12 fw-medium text-muted">جمع : </span>
                                            <h6 class="mb-0">{{ $price }}</h6>
                                        </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                @foreach (Auth::user()->cart->where('order_id', null)->where('user_id', Auth::user()->id)->get() as $product)
                                    <li class="dropdown-item">
                                        <div class="d-flex align-items-center cart-dropdown-item gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xl bg-primary-transparent">
                                                    <img src="{{ asset($product->product->images->first()->url) }}"
                                                        alt="image">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div class="mb-0 fs-14 fw-medium w-50">
                                                        <a href="cart.html"
                                                            class="text-truncate">{{ $product->product->name }}</a>
                                                        <div class="text-truncate">
                                                            {{-- <p
                                                                class="mb-0 header-cart-text text-truncate fs-11 text-muted">
                                                                {{ $product->product->description }}</p> --}}
                                                            <h6 class="fw-medium mb-0 mt-1"><span
                                                                    class="text-success fw-normal me-1 fs-11 d-inline-block">(تعداد
                                                                    : {{ $product->number }})</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <a href="{{ route('cart_delete', [$product]) }}">
                                                            <i class="ri-close-line fs-16 text-muted"></i>
                                                        </a>
                                                        <h6 class="fw-medium mb-0 mt-3"><span
                                                                class="text-info op-4 fw-normal me-1 fs-11 d-inline-block">جمع
                                                                کل :</span>{{ $product->price }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="p-3 empty-header-item border-top d-flex gap-2 align-items-center">
                                <a href="{{ route('cart') }}" class="btn flex-fill btn-primary btn-wave">رفتن به سبد
                                    خرید</a>
                            </div>
                        @else
                            <div class="p-5 empty-item w-100">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-primary-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-medium mb-1 mt-3">سبد خرید خالی است</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">محصول اضافه کنید</span>
                                    <a href="{{ route('index') }}" class="btn btn-primary1 btn-wave btn-sm m-1"
                                        data-abc="true">مشاهده
                                        فروشگاه<i class="bi bi-arrow-left ms-1"></i></a>
                                </div>
                            </div>
                @endif
                @endif


                <!-- End::main-header-dropdown -->
                </li>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                @if (Auth::check())
                    <li class="header-element notifications-dropdown d-xl-block d-none dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5">
                                </path>
                            </svg>
                            @if (Auth::user()->notifications->where('status', 0)->count() != 0)
                                <span class="header-icon-pulse bg-primary2 rounded pulse pulse-secondary"></span>
                            @endif
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                            data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-15 fw-medium">پیام ها</p>
                                    <span class="badge bg-secondary text-fixed-white"
                                        id="notifiation-data">{{ Auth::user()->notifications->where('status', 0)->count() }}
                                        خوانده نشده</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                @foreach (Auth::user()->notifications->where('status', 0) as $notif)
                                    <li class="dropdown-item">
                                        <a href="{{ route('read_notif', [$notif]) }}">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-2 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                            height="32" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M8 9h8" />
                                                            <path d="M8 13h6" />
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div
                                                    class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="mb-0 fw-medium"><a
                                                                href="{{ route('read_notif', [$notif]) }}">{{ $notif->title }}</a>
                                                        </p>
                                                        <div
                                                            class="text-muted fw-normal fs-12 header-notification-text text-truncate">
                                                            {{ $notif->text }}</div>
                                                        <div class="fw-normal fs-10 text-muted op-8">الان</div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);"
                                                            class="min-w-fit-content dropdown-item-close1">
                                                            <i class="ri-close-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            @if (Auth::user()->notifications->where('status', 0)->count() == 0)
                                <div class="p-5 empty-item1">
                                    <div class="text-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                            <i class="ri-notification-off-line fs-2"></i>
                                        </span>
                                        <h6 class="fw-medium mt-3">هشدار جدیدی وجود ندارد</h6>
                                    </div>
                                </div>
                            @endif
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="{{ route('read_notif', ['none']) }}"
                                        class="btn btn-primary btn-wave">مشاهده
                                        همه</a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-open header-link-icon"
                                fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 full-screen-close header-link-icon d-none" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25">
                                </path>
                            </svg>
                        </a>
                        <!-- End::header-link -->
                    </li>
                @endif
                <!-- End::header-element -->

                <!-- Start::header-element -->
                @if (Auth::check())
                    <li class="header-element dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="{{ url('../../assets/images/faces/15.jpg') }}" alt="img"
                                        class="avatar avatar-sm">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li>
                                <div class="dropdown-item text-center border-bottom">
                                    <span>
                                        {{ Auth::user()->name }}
                                    </span>
                                    @can('adminorwriter', 'App\\Models\User')
                                        <span class="d-block fs-12 text-muted">{{ Auth::user()->role->role }}</span>
                                    @endcan
                                </div>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('orders_list') }}"><i
                                        class="fe fe-user p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>حساب
                                    کاربری</a></li>
                            @can('admin', 'App\\Models\User')
                                <li><a class="dropdown-item d-flex align-items-center"
                                        href="{{ route('admin.panel') }}"><i
                                            class="ri-admin-line p-1 rounded-circle bg-primary-transparent me-2 fs-13"></i>پنل
                                        ادمین</a></li>
                            @endcan
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('orders_list') }}">

                                    <svg class="ri-admin-line p-1 rounded-circle bg-primary-transparent me-2 fs-16"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-4 side-menu__icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                        <path d="M3 9l4 0"></path>
                                    </svg>

                                    سفارشات</a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('address_list') }}"><i
                                        class="fe fe-map p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>آدرس
                                    ها</a>
                            </li>
                            {{-- <li><a class="dropdown-item d-flex align-items-center" href="mail.html"><i
                                            class="fe fe-mail p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>ایمیل</a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center" href="file-manager.html"><i
                                            class="fe fe-database p-1 rounded-circle bg-primary-transparent klist me-2 fs-16"></i>مدیریت
                                        فایل<span class="badge bg-primary1 text-fixed-white ms-auto fs-9">2</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i
                                            class="fe fe-settings p-1 rounded-circle bg-primary-transparent ings me-2 fs-16"></i>تنظیمات</a>
                                </li>
                                <li class="border-top bg-light"><a class="dropdown-item d-flex align-items-center"
                                        href="chat.html"><i
                                            class="fe fe-help-circle p-1 rounded-circle bg-primary-transparent set me-2 fs-16"></i>پشتیبانی</a>
                                </li> --}}
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"><i
                                        class="fe fe-lock p-1 rounded-circle bg-primary-transparent ut me-2 fs-16"></i>خروج</a>
                            </li>
                        </ul>
                    </li>
                @endif
                <!-- End::header-element -->

                <!-- Start::header-element -->
                @can('admin', 'App\\Models\User')
                    <li class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                            </svg>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </li>
                @endcan
                <!-- End::header-element -->

            </ul>
            <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

    </header>
    <!-- End::main-header -->

    <!-- Start::main-sidebar -->
    @can('admin', 'App\\Models\User')
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="{{ route('index') }}" class="header-logo">
                    <img src="../../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="../../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    <img src="../../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                    <img src="../../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 side-menu__icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>

                                <span class="side-menu__label">کاربران</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('users_list') }}" class="side-menu__item">لیست کاربران</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-5 h-4 side-menu__icon" viewBox="0 0 16 16">
                                    <path
                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <span class="side-menu__label">محصولات</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('producsList') }}" class="side-menu__item">لیست محصولات</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('add_product') }}" class="side-menu__item">افزودن محصول</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-4 side-menu__icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M13 5h8" />
                                    <path d="M13 9h5" />
                                    <path d="M13 15h8" />
                                    <path d="M13 19h5" />
                                    <path
                                        d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                    <path
                                        d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                </svg>
                                <span class="side-menu__label">ویژگی ها</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('add_attributes', ['none']) }}" class="side-menu__item">افزون
                                        ویژگی به محصولات</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('edit_attr', ['none']) }}" class="side-menu__item">
                                        ویرایش ویژگی ها</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z">
                                    </path>
                                </svg>
                                <span class="side-menu__label">دسته بندی ها</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('add_category') }}" class="side-menu__item">افزودن دسته بندی</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('categories_list') }}" class="side-menu__item">لیست دسته بندی
                                        ها</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-4 side-menu__icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                    <path d="M3 9l4 0" />
                                </svg>
                                <span class="side-menu__label">سفارشات</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('orders_list_admin') }}" class="side-menu__item">لیست سفارشات</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-4 side-menu__icon" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21v-14l9 -4l9 4v14" />
                                    <path d="M13 13h-6v8h6v-8z" />
                                    <path d="M18 13h-1v8h1v-8z" />
                                </svg>

                                <span class="side-menu__label">برند ها</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('add_brand') }}" class="side-menu__item">افزودن برند</a>
                                    <a href="{{ route('brands_list') }}" class="side-menu__item">لیست برند ها</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-4 side-menu__icon">
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
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewbox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
    @endcan
    @if (Auth::check())
        @if (Auth::user()->role_id == 2)
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
        @endif
    @endif
    <!-- End::main-sidebar -->

    <!-- Start::app-content -->








    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1100;">
        @if (session()->has('success'))
            <div id="successToast" class="toast colored-toast bg-success-transparent" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-fixed-white">
                    <img class="bd-placeholder-img rounded me-2"
                        src="{{ url('assets/images/brand-logos/toggle-dark.png') }}" alt="...">
                    <strong class="me-auto">Shop</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-fixed-white">
                    <img class="bd-placeholder-img rounded me-2"
                        src="{{ url('assets/images/brand-logos/toggle-dark.png') }}" alt="...">
                    <strong class="me-auto">Shop</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('error') }}
                </div>
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-danger text-fixed-white">
                        <img class="bd-placeholder-img rounded me-2"
                            src="{{ url('assets/images/brand-logos/toggle-dark.png') }}" alt="...">
                        <strong class="me-auto">Shop</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    {{-- Script برای نمایش خودکار --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.toast').forEach(function(toastEl) {
                const toast = new bootstrap.Toast(toastEl)
                toast.show()
            })
        })
    </script>
    <style>
        .global-btn {
            position: fixed;
            bottom: 20px;
            /*right: 20px; */
            z-index: 105;
            /* بالاتر از همه آیتم‌ها */
            background: #dee0e4;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background 0.3s;
        }

        .global-btn:hover {
            background: #8d9095;
        }
    </style>
    @if (Auth::check())
        @if (Auth::user()->role_id == 3 or Auth::user()->role_id == 2)
            <div style="margin-top: 80px;" class="main-content app-content">
                <div class="container-fluid">
                    @yield('content')
                    <a class="global-btn" href="javascript:void(0);" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                        class="chatnameperson responsive-userinfo-open"><img src="{{ asset('icons/support.svg') }}"
                            alt=""></a>
                </div>
            </div>
        @else
            <div style="margin-top: 80px; margin-right: 0;" class="main-content app-content">
                <div class="container-fluid">

                    @yield('content')
                    <a class="global-btn" href="javascript:void(0);" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                        class="chatnameperson responsive-userinfo-open"><img src="{{ asset('icons/support.svg') }}"
                            alt=""></a>
                </div>
            </div>
        @endif
    @else
        <div style="margin-top: 80px; margin-right: 0;" class="main-content app-content">
            <div class="container-fluid">

                @yield('content')
                <a class="global-btn" href="javascript:void(0);" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                    class="chatnameperson responsive-userinfo-open"><img src="{{ asset('icons/support.svg') }}"
                        alt=""></a>
            </div>
        </div>
    @endif
    <div class="offcanvas offcanvas-start mb-0" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body">
            <div class="main-chart-wrapper gap-lg-2 gap-0 mb-2 d-lg-flex">
                <div class="main-chat-area border scroll" style="height: 660px">
                    <div class="d-flex align-items-center border-bottom main-chat-head flex-wrap">
                        <span class="avatar avatar-md online chatstatusperson me-2 lh-1">
                            <img class="chatimageperson" style="height: 50px; width: 50px;"
                                src="{{ asset('site/support.png') }}" alt="img">
                        </span>
                        <div class="flex-fill">
                            <p class="mb-0 fw-medium fs-14 lh-1">
                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                    class="chatnameperson responsive-userinfo-open">پشتیبانی</a>
                            </p>
                            <p class="text-muted mb-0 chatpersonstatus">آنلاین</p>
                        </div>
                        <div class="d-flex flex-wrap rightIcons gap-2">
                            <button aria-label="button" type="button"
                                class="btn btn-icon btn-outline-light  responsive-userinfo-open btn-sm">
                                <i class="ti ti-user-circle" id="responsive-chat-close"></i>
                            </button>
                            <button aria-label="button" type="button"
                                class="btn btn-icon btn-primary-light my-0 responsive-chat-close btn-sm">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chat-content" id="main-chat-content" style="width: 50px!imporatant;height: 100%;">
                        <ul class="list-unstyled" id="ul-messages">
                            @if ($chats->count() > 0)
                                @php
                                    $date = $chats->first()->created_at_shamsi;
                                @endphp
                                @if ($date != Morilog\Jalali\Jalalian::now()->format('m/d'))
                                    <li class="chat-day-label">
                                        <span>{{ $date }}</span>
                                    </li>
                                @else
                                    <li class="chat-day-label">
                                        <span>امروز</span>
                                    </li>
                                @endif
                            @endif
                            @if ($chats->count() > 0)
                                @foreach ($chats as $message)
                                    @if ($message->created_at_shamsi != $date)
                                        @if (\Morilog\Jalali\Jalalian::now()->format('m/d') == $message->created_at_shamsi)
                                            <li class="chat-day-label">
                                                <span>امروز</span>
                                            </li>
                                        @else
                                            <li class="chat-day-label">
                                                <span>{{ $message->created_at_shamsi }}</span>
                                            </li>
                                        @endif
                                    @endif
                                    @php
                                        $date = $message->created_at_shamsi;
                                    @endphp
                                    @if ($message->sender == 'user')
                                        <li class="chat-item-start">
                                            <div class="chat-list-inner">
                                                <div class="chat-user-profile">
                                                    <span class="avatar avatar-md online chatstatusperson">
                                                        <img class="chatimageperson"
                                                            src="{{ asset('assets/images/faces/15.jpg') }}"
                                                            alt="img">
                                                    </span>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="main-chat-msg">
                                                        <div>
                                                            <p class="mb-0">{{ $message->text }}</p>
                                                        </div>
                                                    </div>
                                                    <span class="chatting-user-info">
                                                        <span class="chatnameperson">شما</span> <span
                                                            class="msg-sent-time">{{ $message->created_at->format('H:i') }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @if ($message->sender == 'ai')
                                        <li class="chat-item-end">
                                            <div class="chat-list-inner">
                                                <div class="me-3">
                                                    <div class="main-chat-msg">
                                                        <div>
                                                            <p class="mb-0">{!! $message->text !!}</p>
                                                        </div>
                                                    </div>
                                                    <span class="chatting-user-info">
                                                        <span class="msg-sent-time"><span
                                                                class="chat-read-mark align-middle d-inline-flex"><i
                                                                    class="ri-check-double-line"></i></span>{{ $message->created_at->format('H:i') }}</span>
                                                        پشتیبانی
                                                    </span>
                                                </div>
                                                <div class="chat-user-profile">
                                                    <span class="avatar avatar-md online">
                                                        <img src="{{ asset('site/support.png') }}" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="chat-footer d-flex" style="">
                    <input class="form-control chat-message-space" id="send-message"
                        placeholder="پیام خود را اینجا تایپ کنید..." type="text">
                    <a aria-label="anchor" onclick="send()" class="btn btn-primary ms-2 btn-icon btn-send"
                        href="javascript:void(0)">
                        <i class="ri-send-plane-2-line"></i>
                    </a>
                </div>
            </div>
            {{-- <div><p>lncjndsk</p></div> --}}

        </div>
    </div>

    </div>

    @if ($chats->count() > 0)
        <script>
            date = {{ $date }}
            now = {{ Morilog\Jalali\Jalalian::now()->format('m/d') }}
        </script>
    @else
        <script>
            date = 0
            now = {{ Morilog\Jalali\Jalalian::now()->format('m/d') }}
        </script>
    @endif

    <script>
        const inputs = document.querySelectorAll('.is-invalid')
        inputs.forEach(input => {
            input.addEventListener("input", function() {
                input.classList.remove('is-invalid')
            })
        })
    </script>
    <script>
        function send() {
            var message = $('#send-message').val();
            if (message == "") {
                alert("وارد کردن پیام الزامیست")
            } else {
                const messageHtml = `
<li class="chat-item-start" id="last">
    <div class="chat-list-inner">
        <div class="chat-user-profile">
            <span class="avatar avatar-md online chatstatusperson">
            <img class="chatimageperson" src="{{ asset('assets/images/faces/15.jpg') }}" alt="img">
            </span>
        </div>
        <div class="ms-3">
            <div class="main-chat-msg">
                <div>
                    <p class="mb-0">${message}</p>
                </div>
            </div>
            <span class="chatting-user-info">
                <span class="chatnameperson">شما</span>
                <span class="msg-sent-time">{{ now()->format('H:i') }}</span>
            </span>
        </div>
    </div>
</li>
`;
                if (now != date) {
                    $("#ul-messages").append(`
                                    <li class="chat-day-label">
                                        <span>امروز</span>
                                    </li>
            `);
            date = now
                }
                $("#ul-messages").append(messageHtml);
                $("#send-message").val('');
                $("#send-message").prop('disabled', true);
                $("#ul-messages").append(`
            <div class="d-flex">
            <div class="spinner-grow ms-auto" style="color: #939aa3;width: 25px; height:25px" id="spinner" role="status">
    <span class="visually-hidden">بارگذاری</span>
</div></div>
            `);
                scrollChatToBottom();

                console.log(message)
                $.ajax({
                    url: "{{ route('support_index') }}",
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "message": message,
                    },
                    success: function(result) {
                        $("#spinner").remove();
                        const messageHtml = `
        <li class="chat-item-end">
        <div class="chat-list-inner">
        <div class="me-3">
        <div class="main-chat-msg">
        <div>
        <p class="mb-0">${result.message}</p>
        </div>
        </div>
        <span class="chatting-user-info">
        <span class="msg-sent-time"><span
        class="chat-read-mark align-middle d-inline-flex"><i
        class="ri-check-double-line"></i></span>{{ now()->format('H:i') }}</span> پشتیبانی
        </span>
        </div>
        <div class="chat-user-profile">
        <span class="avatar avatar-md online">
        <img class="chatimageperson" src="{{ asset('site/support.png') }}" alt="img">
                        </span>
                    </div>
                 </div>
            </li>
        `;
                        $("#ul-messages").append(messageHtml);
                        $("#send-message").prop('disabled', false);
                        scrollChatToBottom()
                    },
                    // error: function(res){
                    //     console.log(res.response)
                    // }
                });
            }
        }
    </script>







    <!-- End::app-content -->

    <!-- Start::main-modal -->

    <div class="modal fade" id="header-responsive-search" tabindex="-1"
        aria-labelledby="header-responsive-search" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control border-end-0" placeholder="جستجو"
                            aria-label="جستجو" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::main-modal -->

    <!-- Start::main-footer -->

    <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
        </div>
    </footer> <!-- End::main-footer -->

    </div>

    <!-- Start::main-scripts -->

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    <!-- Popper JS -->
    <script src="{{ url('../../assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ url('../../assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ url('../../assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ url('../../assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('../../assets/js/simplebar.js') }}"></script>

    <!-- Auto Complete JS -->
    {{-- <script src="{{ url('../../assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script> --}}

    <!-- Color Picker JS -->
    <script src="{{ url('../../assets/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Date & Time Picker JS -->
    <script src="{{ url('../../assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- End::main-scripts -->


    <!-- Apex Charts JS -->
    {{-- <script src="{{ url('../../assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

    <!-- Sales Dashboard -->
    {{-- <script src="{{ url('../../assets/js/sales-dashboard.js') }}"></script> --}}
    <!-- Toastify JS -->
    <script src="{{ url('../../assets/libs/toastify-js/src/toastify.js') }}"></script>

    <!-- Prism JS -->
    <script src="./assets/libs/prismjs/prism.js"></script>
    <script src="./assets/js/prism-custom.js"></script>

    <!-- Toast JS -->
    <script src="./assets/js/toasts.js"></script>
    <script src="../../assets/libs/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Internal POS-Dashboard JS -->
    <script src="{{ url('../../assets/js/pos-dashboard.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ url('../../assets/js/sticky.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ url('../../assets/js/defaultmenu.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ url('../../assets/js/custom.js') }}"></script>

    <!-- Custom-Switcher JS -->
    {{-- <script src="{{  url('../../assets/js/custom-switcher.min.js') }}"></script> --}}


    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
    {{-- <link rel="stylesheet" href="{{ url('../../assets/css/persianDatepicker-default.css') }}"> --}}
    <script src="./assets/js/persianDatepicker.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Datatables Cdn -->
    <script src="{{ url('./assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <!-- Internal Datatables JS -->
    <script src="{{ url('./assets/js/datatables.js') }}"></script>


    {{-- <script src="{{ url('../../assets/libs/fg-emoji-picker/fgEmojiPicker.js') }}"></script> --}}
    <script src="{{ url('../../assets/libs/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('../../assets/js/chat.js') }}"></script>
    {{-- <script>
        $(document).ready(function() {

            $('#daterange').persianDatepicker({
                onShow: function() {

                },
                onSelect: function() {

                }
            });



        });
    </script> --}}


    @stack('scripts')


</body>

</html>
