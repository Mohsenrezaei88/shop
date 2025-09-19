 @extends('layout.master')
 @section('content')
     <!-- Page Header -->

     <head>
         <link rel="stylesheet" href="{{ url('../../assets/libs/glightbox/css/glightbox.min.css') }}">
         <style>
             .scroll {
                 flex: 1 1 auto;
                 width: 100%;
                 height: 100vh;
                 /* ارتفاع کل صفحه */
                 overflow-y: auto;
                 /* فعال کردن اسکرول عمودی */
                 display: flex;
                 flex-direction: column;
             }
         </style>
     </head>

     <!-- Page Header Close -->

     <div class="main-chart-wrapper gap-lg-2 gap-0 mb-2 d-lg-flex">
         {{-- <div class="chat-info border">
             <div class="chat-search p-3 border-bottom">
                 <div class="input-group">
                     <input type="text" class="form-control" placeholder="جستجو چت" aria-describedby="button-addon01">
                     <button aria-label="button" class="btn btn-primary-light" type="button" id="button-addon01">
                         <i class="ri-search-line"></i>
                     </button>
                 </div>
             </div>
             <div class="tab-content" id="myTabContent">
                  <div class="tab-pane show active border-0 chat-users-tab" id="users-tab-pane" role="tabpanel"
                     aria-labelledby="users-tab" tabindex="0">
                     <ul class="list-unstyled mb-0 mt-2 chat-users-tab" id="chat-msg-scroll">
                         <li class="pb-0">
                             <p class="text-muted fs-11 fw-medium mb-2 op-7">چت‌های فعال</p>
                         </li>
                         <li class="checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'رها','5','آنلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md online me-2">
                                             <img src="./assets/images/faces/5.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             رشید <span class="float-end text-muted fw-normal fs-11">۱۱:۱۲ شب</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">سلام!! هستی؟ &#128522;</span>
                                             <span class="badge bg-primary2 rounded-pill float-end">۳</span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-msg-unread checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'متین','2','آنلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md online me-2">
                                             <img src="./assets/images/faces/2.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             حامد <span class="float-end text-muted fw-normal fs-11">۰۶:۵۲ صبح</span>
                                         </p>
                                         <p class="fs-12 mb-0 chat-msg-typing">
                                             <span class="chat-msg text-truncate">در حال نوشتن...</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>

                                 </div>
                             </a>
                         </li>
                         <li class="checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'ماهان','10','آنلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md online me-2">
                                             <img src="./assets/images/faces/10.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             ماهان <span class="float-end text-muted fw-normal fs-11">۱۰:۱۵ صبح</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">عالیه! خوشحالم اینو ازت می‌شنوم.
                                                 &#9749;</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="checkforactive active">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'سارا','6','آنلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md online me-2">
                                             <img src="./assets/images/faces/6.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             سارا <span class="float-end text-muted fw-normal fs-11">۰۳:۱۵
                                                 بعدازظهر</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">منتظر خبر در این مورد هستم</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="pb-0">
                             <p class="text-muted fs-11 fw-medium mb-2 op-7">همه چت ها</p>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'رامین','11','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/11.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             رامین <span class="float-end text-muted fw-normal fs-11">۰۴:۱۳
                                                 بعدازظهر</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">حتماً باید بیای &#127916;</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'متین','3','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/3.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             متین <span class="float-end text-muted fw-normal fs-11">۱۲:۴۶
                                                 بامداد</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">یادت هست تاریخ رو؟</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>

                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'محمد','13','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/13.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             محمد <span class="float-end text-muted fw-normal fs-11">۰۷:۳۰ شب</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">سلام، ممنونم بابت همه‌چیز</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'زهرا','4','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/4.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             زهرا <span class="float-end text-muted fw-normal fs-11">۰۱:۱۸
                                                 بعدازظهر</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">دارم می‌رم استرالیا!</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'زیبا','13','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/13.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             زیبا <span class="float-end text-muted fw-normal fs-11">۰۸:۰۷ شب</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">کمی سرم شلوغ است &#127829;</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'ساحل','15','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/15.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             ساحل <span class="float-end text-muted fw-normal fs-11">۰۹:۱۹ شب</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">سوالی دارید؟</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </div>
                  <div class="tab-pane border-0 chat-groups-tab" id="groups-tab-pane" role="tabpanel"
                     aria-labelledby="groups-tab" tabindex="0">
                     <ul class="list-unstyled mb-0 mt-2 ">
                         <li class="pb-0">
                             <p class="text-muted fs-11 fw-medium mb-1 op-7">گروه‌های چت من</p>
                         </li>
                         <li>
                             <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                     <p class="mb-0 fw-medium"><i
                                             class="ri-checkbox-blank-circle-fill lh-1 text-primary me-1 fs-8 align-middle"></i>سنگ‌های
                                         بزرگ</p>
                                     <p class="mb-0"><span class="badge bg-primary3-transparent">۴ آنلاین</span></p>
                                 </div>

                                 <div class="avatar-list-stacked my-auto">
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/2.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/8.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/2.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/10.jpg" alt="img">
                                     </span>
                                     <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                         href="javascript:void(0);">
                                         +19
                                     </a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                     <p class="mb-0 fw-medium"><i
                                             class="ri-checkbox-blank-circle-fill lh-1 text-primary2 me-1 fs-8 align-middle"></i>گروه
                                         خلاق</p>
                                     <p class="mb-0"><span class="badge bg-primary2-transparent">۳۲ آنلاین</span>
                                     </p>
                                 </div>

                                 <div class="avatar-list-stacked my-auto">
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/1.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/7.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/3.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/9.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/12.jpg" alt="img">
                                     </span>
                                     <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                         href="javascript:void(0);">
                                         +123
                                     </a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                     <p class="mb-0 fw-medium"><i
                                             class="ri-checkbox-blank-circle-fill lh-1 text-primary3 me-1 fs-8 align-middle"></i>آنیساید
                                         اسپیریچوال</p>
                                     <p class="mb-0"><span class="badge bg-primary1-transparent">۳ آنلاین</span></p>
                                 </div>
                                 <div class="avatar-list-stacked my-auto">
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/4.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/8.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/13.jpg" alt="img">
                                     </span>
                                     <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                         href="javascript:void(0);">
                                         +15
                                     </a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                     <p class="mb-0 fw-medium"><i
                                             class="ri-checkbox-blank-circle-fill lh-1 text-secondary me-1 fs-8 align-middle"></i>زمان
                                         خوش</p>
                                     <p class="mb-0"><span class="badge bg-secondary-transparent">۵ آنلاین</span>
                                     </p>
                                 </div>
                                 <div class="avatar-list-stacked my-auto">
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/1.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/7.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/14.jpg" alt="img">
                                     </span>
                                     <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                         href="javascript:void(0);">
                                         +28
                                     </a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                     <p class="mb-0 fw-medium"><i
                                             class="ri-checkbox-blank-circle-fill lh-1 text-warning me-1 fs-8 align-middle"></i>آخرین
                                         اخبار</p>
                                     <p class="mb-0"><span class="badge bg-warning-transparent">۲ آنلاین</span></p>
                                 </div>
                                 <div class="avatar-list-stacked my-auto">
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/5.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/6.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/12.jpg" alt="img">
                                     </span>
                                     <span class="avatar avatar-sm avatar-rounded">
                                         <img src="./assets/images/faces/3.jpg" alt="img">
                                     </span>
                                     <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                         href="javascript:void(0);">
                                         +53
                                     </a>
                                 </div>
                             </div>
                         </li>
                     </ul>
                     <ul class="list-unstyled mb-0 mt-2 ">
                         <li class="pb-0">
                             <p class="text-muted fs-11 fw-medium mb-1 op-7">چت‌های گروهی</p>
                         </li>
                         <li class="checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,' سنگ های بزرگ','17','آنلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md online me-2">
                                             <img src="./assets/images/faces/17.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             سنگ‌های بزرگ &#128525; <span
                                                 class="float-end text-muted fw-normal fs-11">۱۲:۲۴ بعدازظهر</span>
                                         </p>
                                         <p class="fs-12 mb-0 chat-msg-typing ">
                                             <span class="chat-msg text-truncate">سارا در حال نوشتن است...</span>

                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                             <span class="badge bg-primary3 rounded-circle float-end">2</span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-msg-unread checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'گروه خلاق','18','آنلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md online me-2">
                                             <img src="./assets/images/faces/18.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             گروه خلاق <span class="float-end text-muted fw-normal fs-11">۰۶:۱۶
                                                 صبح</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate"><span
                                                     class="group-indivudial">مهتاب:</span> امروز خبری هست؟</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,' گروه برتر','19','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/19.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             گروه برتر &#128526; <span class="float-end text-muted fw-normal fs-11">۲
                                                 روز پیش</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">سارا، مارال، مریم، مهتاب، رز</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>

                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'زمان خوش','20','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/20.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             زمان خوش <span class="float-end text-muted fw-normal fs-11">۳ روز
                                                 پیش</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">سارا، مارال، مریم، مهتاب، رز</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="chat-inactive checkforactive">
                             <a href="javascript:void(0);" onclick="changeTheInfo(this,'آخرین اخبار','21','آفلاین')">
                                 <div class="d-flex align-items-top">
                                     <div class="me-1 lh-1">
                                         <span class="avatar avatar-md offline me-2">
                                             <img src="./assets/images/faces/21.jpg" alt="img">
                                         </span>
                                     </div>
                                     <div class="flex-fill">
                                         <p class="mb-0 fw-medium">
                                             آخرین اخبار <span class="float-end text-muted fw-normal fs-11">۱۰ روز
                                                 پیش</span>
                                         </p>
                                         <p class="fs-12 mb-0">
                                             <span class="chat-msg text-truncate">سارا، مارال، مریم، مهتاب، رز</span>
                                             <span class="chat-read-icon float-end align-middle"><i
                                                     class="ri-check-double-fill"></i></span>
                                         </p>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </div>
                  <div class="tab-pane border-0 chat-contacts-tab" id="contacts-tab-pane" role="tabpanel"
                     aria-labelledby="contacts-tab" tabindex="0">
                     <ul class="list-unstyled mb-0 chat-contacts-tab">
                         <li>
                             <span class="text-default fw-semibold">A</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/5.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         آوا
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/12.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         عالیه
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">B</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/14.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         بنیامین
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">D</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm bg-primary">
                                         C
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         کیمیا
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">D</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/7.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         درسا
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">G</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/15.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         علی
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">L</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm bg-primary">
                                         M
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         بهنام
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/2.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         مینا
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">N</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/10.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         رز
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <span class="text-default fw-semibold">V</span>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-3">
                                 <div class="lh-1">
                                     <span class="avatar avatar-sm">
                                         <img src="./assets/images/faces/16.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <span class="d-block fw-semibold">
                                         خسرو
                                     </span>
                                 </div>
                                 <div class="dropdown">
                                     <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"
                                         class="btn btn-icon btn-sm btn-outline-light">
                                         <i class="ri-more-2-fill"></i>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-message-2-line me-2"></i>چت</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-phone-line me-2"></i>تماس صوتی</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-live-line me-2"></i>تماس تصویری</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-edit-line me-2"></i>ویرایش</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-spam-2-line me-2"></i>مسدود</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                     class="ri-delete-bin-line me-2"></i>حذف</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div> --}}
         <div class="main-chat-area border scroll">
             <div class="d-flex align-items-center border-bottom main-chat-head flex-wrap">
                 <span class="avatar avatar-md online chatstatusperson me-2 lh-1">
                     <img class="chatimageperson" src="./assets/images/faces/6.jpg" alt="img">
                 </span>
                 <div class="flex-fill">
                     <p class="mb-0 fw-medium fs-14 lh-1">
                         <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                             aria-controls="offcanvasRight" class="chatnameperson responsive-userinfo-open">سیما</a>
                     </p>
                     <p class="text-muted mb-0 chatpersonstatus">آنلاین</p>
                 </div>
                 <div class="d-flex flex-wrap rightIcons gap-2">
                     <button aria-label="button" type="button" class="btn btn-icon btn-primary1-light my-0  btn-sm">
                         <i class="ti ti-phone"></i>
                     </button>
                     <button aria-label="button" type="button"
                         class="btn btn-icon btn-primary2-light my-0 btn-sm d-none d-sm-block">
                         <i class="ti ti-video"></i>
                     </button>
                     <button aria-label="button" type="button"
                         class="btn btn-icon btn-outline-light  responsive-userinfo-open btn-sm">
                         <i class="ti ti-user-circle" id="responsive-chat-close"></i>
                     </button>
                     <div class="dropdown">
                         <button aria-label="button"
                             class="btn btn-icon btn-primary3-light  btn-wave waves-light btn-sm waves-effect waves-light"
                             type="button" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="ti ti-dots-vertical"></i>
                         </button>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-user-3-line me-1"></i>حساب
                                     کاربری</a></li>
                             <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-format-clear me-1"></i>پاک
                                     کردن چت</a></li>
                             <li><a class="dropdown-item" href="javascript:void(0);"><i
                                         class="ri-user-unfollow-line me-1"></i>حذف کاربر</a></li>
                             <li><a class="dropdown-item" href="javascript:void(0);"><i
                                         class="ri-user-forbid-line me-1"></i>مسدود کردن کاربر</a></li>
                             <li><a class="dropdown-item" href="javascript:void(0);"><i
                                         class="ri-error-warning-line me-1"></i>گزارش</a></li>
                         </ul>
                     </div>
                     <button aria-label="button" type="button"
                         class="btn btn-icon btn-primary-light my-0 responsive-chat-close btn-sm">
                         <i class="ri-close-line"></i>
                     </button>
                 </div>
             </div>
             <div class="chat-content" id="main-chat-content">
                 <ul class="list-unstyled">
                     <li class="chat-day-label">
                         <span>امروز</span>
                     </li>
                     <li class="chat-item-start">
                         <div class="chat-list-inner">
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online chatstatusperson">
                                     <img class="chatimageperson" src="./assets/images/faces/6.jpg" alt="img">
                                 </span>
                             </div>
                             <div class="ms-3">
                                 <div class="main-chat-msg">
                                     <div>
                                         <p class="mb-0">سلام! &#128522; چطوری؟ این روزها مشغول چی هستی؟</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info">
                                     <span class="chatnameperson">سیما</span> <span class="msg-sent-time">۱۰:۲۰
                                         شب</span>
                                 </span>
                             </div>
                         </div>
                     </li>
                     <li class="chat-item-end">
                         <div class="chat-list-inner">
                             <div class="me-3">
                                 <div class="main-chat-msg">
                                     <div>
                                         <p class="mb-0">او، سلام! &#128516; من خوبم، ممنون! داشتم کتاب می‌خواندم و
                                             از هوای خوب لذت می‌بردم. تو چطوری؟</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info">
                                     <span class="msg-sent-time"><span class="chat-read-mark align-middle d-inline-flex"><i
                                                 class="ri-check-double-line"></i></span>۱۱:۵۰ شب</span> شما
                                 </span>
                             </div>
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online">
                                     <img src="./assets/images/faces/15.jpg" alt="img">
                                 </span>
                             </div>
                         </div>
                     </li>
                     <li class="chat-item-start">
                         <div class="chat-list-inner">
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online chatstatusperson">
                                     <img class="chatimageperson" src="./assets/images/faces/6.jpg" alt="img">
                                 </span>
                             </div>
                             <div class="ms-3">
                                 <div class="main-chat-msg">
                                     <div>
                                         <p class="mb-0">این عالیه! من سرم به کارم گرم بوده اما منتظر آخر هفته هستم.
                                             اگر هوا خوب بود می‌خواهم بروم کوه‌نوردی.</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info">
                                     <span class="chatnameperson">سیما</span> <span class="msg-sent-time">۱۱:۵۱
                                         شب</span>
                                 </span>
                             </div>
                         </div>
                     </li>
                     <li class="chat-item-end">
                         <div class="chat-list-inner">
                             <div class="me-3">
                                 <div class="main-chat-msg">
                                     <div>
                                         <p class="mb-0">عالیه! کوه‌نوردی راه خوبی برای آرامش است. کدام مسیر را
                                             می‌خواهی بروی؟</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info">
                                     <span class="msg-sent-time"><span
                                             class="chat-read-mark align-middle d-inline-flex"><i
                                                 class="ri-check-double-line"></i></span>۱۱:۵۲ شب</span> شما
                                 </span>
                             </div>
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online">
                                     <img src="./assets/images/faces/15.jpg" alt="img">
                                 </span>
                             </div>
                         </div>
                     </li>
                     <li class="chat-item-start">
                         <div class="chat-list-inner">
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online chatstatusperson">
                                     <img class="chatimageperson" src="./assets/images/faces/6.jpg" alt="img">
                                 </span>
                             </div>
                             <div class="ms-3">
                                 <div class="main-chat-msg">
                                     <div>
                                         <p class="mb-0">فکر می‌کنم مسیر کوهپایه را بروم. مناظر زیبایی از دره دارد.
                                             دوست داری همراهی کنی؟</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info">
                                     <span class="chatnameperson">سیما</span> <span class="msg-sent-time">۱۱:۵۵
                                         شب</span>
                                 </span>
                             </div>
                         </div>
                     </li>
                     <li class="chat-item-end">
                         <div class="chat-list-inner">
                             <div class="me-3">
                                 <div class="main-chat-msg">
                                     <div class="">
                                         <p class="mb-0">خیلی خوبه! دوست دارم بیام. بهم بگو چه ساعتی می‌خواهی حرکت
                                             کنی، من هم خوراکی برای مسیر آماده می‌کنم.</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info">
                                     <span class="msg-sent-time"><span
                                             class="chat-read-mark align-middle d-inline-flex"><i
                                                 class="ri-check-double-line"></i></span>۱۱:۵۲ شب</span> شما
                                 </span>
                             </div>
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online">
                                     <img src="./assets/images/faces/15.jpg" alt="img">
                                 </span>
                             </div>
                         </div>
                     </li>
                     <li class="chat-item-start">
                         <div class="chat-list-inner">
                             <div class="chat-user-profile">
                                 <span class="avatar avatar-md online">
                                     <img class="chatimageperson" src="./assets/images/faces/6.jpg" alt="img">
                                 </span>
                             </div>
                             <div class="ms-3">
                                 <div class="main-chat-msg">
                                     <div>
                                         <p class="mb-0">باشه. &#128516;</p>
                                     </div>
                                 </div>
                                 <span class="chatting-user-info chatnameperson">
                                     سیما <span class="msg-sent-time">۱۱:۴۵ شب</span>
                                 </span>
                             </div>
                         </div>
                     </li>
                 </ul>

             </div>
             <div class="chat-footer">
                 <a aria-label="anchor" class="btn btn-primary1-light me-2 btn-icon btn-send" href="javascript:void(0)">
                     <i class="ri-attachment-2"></i>
                 </a>
                 <a aria-label="anchor" class="btn btn-icon me-2 btn-primary2 emoji-picker" href="javascript:void(0)">
                     <i class="ri-emotion-line"></i>
                 </a>
                 <input class="form-control chat-message-space" placeholder="پیام خود را اینجا تایپ کنید..."
                     type="text">
                 <a aria-label="anchor" class="btn btn-primary ms-2 btn-icon btn-send" href="javascript:void(0)">
                     <i class="ri-send-plane-2-line"></i>
                 </a>
             </div>
         </div>

     </div>

     <!-- Start::chat user details offcanvas -->
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight">
         <div class="offcanvas-body">
             {{-- <button type="button" class="btn btn-sm btn-icon btn-outline-light border" data-bs-dismiss="offcanvas"
                 aria-label="بستن"><i class="ri-close-line lh-1 align-center"></i></button>
             <div class="chat-user-details" id="chat-user-details">
                 <div class="text-center mb-4">
                     <span class="avatar avatar-rounded online avatar-xxl me-2 mb-3 chatstatusperson">
                         <img class="chatimageperson" src="./assets/images/faces/2.jpg" alt="img">
                     </span>
                     <p class="mb-1 fs-15 fw-medium text-dark lh-1 chatnameperson">سیما</p>
                     <p class="fs-12 text-muted"><span class="chatnameperson">jamisonjen0114</span>@gmail.com</p>
                     <p class="text-center mb-0 d-flex gap-2 flex-wrap">
                         <button type="button" aria-label="button" class="btn btn-primary-light btn-wave flex-fill"><i
                                 class="ri-phone-line me-2 align-middle"></i>تماس</button>
                         <button type="button" aria-label="button" class="btn btn-primary1-light btn-wave flex-fill"><i
                                 class="ri-video-add-line me-2 align-middle"></i>تماس تصویری</button>
                         <button type="button" aria-label="button" class="btn btn-info-light btn-wave flex-fill"><i
                                 class="ri-chat-1-line me-2 align-middle"></i>پیام</button>
                     </p>
                 </div>
                 <div class="mb-4 pt-2">
                     <div class="fw-medium mb-4">فایل‌های مشترک
                         <span class="badge bg-primary2 ms-1 rounded-pill">17</span>
                         <span class="float-end fs-11"><a href="javascript:void(0);" class="fs-12 text-muted">مشاهده
                                 همه<i class="ti ti-arrow-narrow-left ms-1"></i> </a></span>
                     </div>
                     <ul class="shared-files list-unstyled">
                         <li>
                             <div class="d-flex align-items-center">
                                 <div class="me-2 bg-primary-transparent rounded-circle">
                                     <span class="shared-file-icon">
                                         <i class="ti ti-file-text text-primary"></i>
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <p class="fs-12 fw-medium mb-0">notification.pdf</p>
                                     <p class="mb-0 text-muted fs-11">۲۴ آذر ۱۴۰۳ - ۱۲:۴۵ بعدازظهر</p>
                                 </div>
                                 <div class="fs-18">
                                     <a aria-label="anchor" href="javascript:void(0)"><i
                                             class="ri-download-2-line text-muted"></i></a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center">
                                 <div class="me-2 bg-secondary-transparent rounded-circle">
                                     <span class="shared-file-icon">
                                         <i class="ri-image-line text-secondary"></i>
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <p class="fs-12 fw-medium mb-0">Image_file1.Jpg</p>
                                     <p class="mb-0 text-muted fs-11">۱۱ مهر ۱۴۰۳ - ۰۳:۲۰ صبح</p>
                                 </div>
                                 <div class="fs-18">
                                     <a aria-label="anchor" href="javascript:void(0)"><i
                                             class="ri-download-2-line text-muted"></i></a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center">
                                 <div class="me-2 bg-success-transparent rounded-circle">
                                     <span class="shared-file-icon">
                                         <i class="ri-image-line text-success"></i>
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <p class="fs-12 fw-medium mb-0">Imagefile_12.Jpg</p>
                                     <p class="mb-0 text-muted fs-11">۲۷ مهر ۱۴۰۳ - ۰۱:۲۳ بعدازظهر</p>
                                 </div>
                                 <div class="fs-18">
                                     <a aria-label="anchor" href="javascript:void(0)"><i
                                             class="ri-download-2-line text-muted"></i></a>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center">
                                 <div class="me-2 bg-orange-transparent rounded-circle">
                                     <span class="shared-file-icon">
                                         <i class="ri-video-line text-orange"></i>
                                     </span>
                                 </div>
                                 <div class="flex-fill">
                                     <p class="fs-12 fw-medium mb-0">Video-rec-20-10-2021.MP4</p>
                                     <p class="mb-0 text-muted fs-11">۲۳ اردیبهشت ۱۴۰۳ - ۰۴:۲۵ بعدازظهر</p>
                                 </div>
                                 <div class="fs-18">
                                     <a href="javascript:void(0)"><i class="ri-download-2-line text-muted"></i></a>
                                 </div>
                             </div>
                         </li>
                     </ul>
                 </div>
                 <div class="mb-0 pt-2">
                     <div class="fw-medium mb-4">عکس و رسانه
                         <span class="badge bg-primary3 ms-1 rounded-pill">15</span>
                         <span class="float-end fs-11"><a href="javascript:void(0);" class="fs-12 text-muted">
                                 مشاهده همه<i class="ti ti-arrow-narrow-left ms-1"></i> </a></span>
                     </div>
                     <div class="row gy-3">
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-40.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-40.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-41.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-41.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-42.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-42.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-43.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-43.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-44.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-44.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-45.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-45.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-46.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-46.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-60.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-60.jpg" alt="image">
                             </a>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                             <a href="./assets/images/media/media-61.jpg" class="glightbox card mb-0"
                                 data-gallery="gallery1">
                                 <img src="./assets/images/media/media-61.jpg" alt="image">
                             </a>
                         </div>
                     </div>
                 </div>
             </div> --}}
         </div>
     </div>
     @push('scripts')
         <script src="{{ url('../../assets/libs/fg-emoji-picker/fgEmojiPicker.js') }}"></script>
         <script src="{{ url('../../assets/libs/glightbox/js/glightbox.min.js') }}"></script>
         <script src="{{ url('../../assets/js/chat.js') }}"></script>
     @endpush
 @endsection
