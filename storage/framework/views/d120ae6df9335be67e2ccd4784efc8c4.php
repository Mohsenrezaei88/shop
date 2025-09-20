 
 <?php $__env->startSection('content'); ?>
     <!-- Page Header -->

     <head>
         <link rel="stylesheet" href="<?php echo e(url('../../assets/libs/glightbox/css/glightbox.min.css')); ?>">
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
             
         </div>
     </div>
     <?php $__env->startPush('scripts'); ?>
         <script src="<?php echo e(url('../../assets/libs/fg-emoji-picker/fgEmojiPicker.js')); ?>"></script>
         <script src="<?php echo e(url('../../assets/libs/glightbox/js/glightbox.min.js')); ?>"></script>
         <script src="<?php echo e(url('../../assets/js/chat.js')); ?>"></script>
     <?php $__env->stopPush(); ?>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\shop-app\resources\views/users/test.blade.php ENDPATH**/ ?>