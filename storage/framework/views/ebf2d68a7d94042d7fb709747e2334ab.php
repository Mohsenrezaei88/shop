
<?php $__env->startSection('content'); ?>
    <script>
        function getaddress(address) {
            $.ajax({
                url: "<?php echo e(route('get_address')); ?>",
                type: "POST",
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    address: address
                },
                success: function(result) {
                    $("#name-change").val(result.address.name)
                    $('#phonenumber-change').val(result.address.phone)
                    $('#address-change').val(result.address.address)
                    $('#pincode-change').val(result.address.pincode)
                    $('#address-form-change').attr("action", "<?php echo e(route('edit_address', ':address')); ?>".replace(
                        ":address", result.address.id))
                    setCMarker(result.address.lat, result.address.lng)
                    Cmap.panTo([result.address.lat, result.address.lng]);
                },
                error: function(response) {
                    console.error(response.responseText)
                }
            });
        }
    </script>
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">پروفایل</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0 mt-2">حساب کاربری</h1>
        </div>
    </div>

    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-3">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <div class="row w-100">
                        <div class="col-xxl-12">
                            <span class="mx-auto fw-bold"><?php echo e(Auth::user()->name); ?></span>
                        </div>
                        <div class="col-xxl-12">
                            <span class="d-block text-secondary mt-1"><?php echo e(Auth::user()->phonenumber); ?></span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <button onclick="window.location.href = '<?php echo e(route('orders_list')); ?>'"
                                class="btn btn-outline-secondary btn-wave waves-effect waves-light w-100">
                                سفارش ها
                            </button>
                        </li>
                        <li class="list-group-item">
                            <button onclick="window.location.href = '#'"
                                class="btn btn-outline-secondary btn-wave waves-effect waves-light active w-100">
                                آدرس ها
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-9">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        آدرس های من
                    </div>
                    <div class="ms-auto mt-1">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modal-new-address">
                            <i class="ri-add-line me-1 align-middle fs-14 fw-semibold"></i>افزودن آدرس
                            جدید
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card w-100 border border-primary">
                            <div class="card-header text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="24" height="22"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <p class="fs-6 mb-0 mb-2">آدرس شماره <?php echo e($key + 1); ?></p>
                                <div class="dropdown ms-auto">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="border-bottom"> <a class="dropdown-item"
                                                onclick="getaddress(<?php echo e($address->id); ?>)" data-bs-toggle="modal"
                                                data-bs-target="#modal-change-address"><i class="ri-edit-2-line text-primary"></i>
                                                تغییر</a></li>
                                        <li class="border-bottom"><a class="dropdown-item" href="<?php echo e(route('delete_address' , [$address])); ?>">
                                            <i class="fe fe-trash text-danger"></i>
                                            حذف</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-secondary"><?php echo e($address->address); ?></p>
                                <p class="text-secondary">کد پستی : <?php echo e($address->pincode); ?></p>
                                <p class="text-secondary">گیرنده : <?php echo e($address->name); ?> | <?php echo e($address->phone); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center flex-wrap overflow-auto">
 
 
                    </div>
                </div>
            </div>
        </div>
    </div>





















    <div class="modal fade" id="modal-new-address" tabindex="-1" aria-labelledby="modal-new-address"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">آدرس جدید</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="address-form" action="<?php echo e(route('add_address')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <label for="fullname-new" class="form-label">نام کامل</label>
                                <input type="text" class="form-control" name="name" id="fullname-new"
                                    placeholder="نام کامل">
                            </div>
                            <div class="col-xl-6">
                                <label for="phonenumber-new" class="form-label">شماره تلفن</label>
                                <input type="number" class="form-control" name="phone" id="phonenumber-new"
                                    placeholder="تلفن">
                            </div>
                            <div class="col-xl-8">
                                <label for="address-new" class="form-label">آدرس</label>
                                <input type="text" class="form-control" name="address" id="address-new"
                                    placeholder="آدرس">
                            </div>
                            <div class="col-xl-4">
                                <label for="pincode-new" class="form-label">کدپستی</label>
                                <input type="number" class="form-control" name="pincode" id="pincode-new"
                                    placeholder="کدپستی">
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <label class="form-label">انتخاب موقعیت روی نقشه</label>
                            <div id="map"
                                style="height: 400px; width: 100%; border:1px solid #ccc; border-radius: 8px;">
                            </div>
                        </div>

                        <input type="hidden" id="lat" name="lat">
                        <input type="hidden" id="lng" name="lng">
                    </form>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</a>
                    <button type="submit" form="address-form" class="btn btn-success">ذخیره
                        آدرس</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-change-address" tabindex="-1" aria-labelledby="modal-change-address"
        aria-hidden="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">تغییر آدرس</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="address-form-change" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <label for="fullname-new" class="form-label">نام کامل</label>
                                <input type="text" class="form-control" name="name" id="name-change"
                                    placeholder="نام کامل">
                            </div>
                            <div class="col-xl-6">
                                <label for="phonenumber-new" class="form-label">شماره تلفن</label>
                                <input type="number" class="form-control" name="phone" id="phonenumber-change"
                                    placeholder="تلفن">
                            </div>
                            <div class="col-xl-8">
                                <label for="address-new" class="form-label">آدرس</label>
                                <input type="text" class="form-control" name="address" id="address-change"
                                    placeholder="آدرس">
                            </div>
                            <div class="col-xl-4">
                                <label for="pincode-new" class="form-label">کدپستی</label>
                                <input type="number" class="form-control" name="pincode" id="pincode-change"
                                    placeholder="کدپستی">
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <label class="form-label">انتخاب موقعیت روی نقشه</label>
                            <div id="Cmap"
                                style="height: 400px; width: 100%; border:1px solid #ccc; border-radius: 8px;">
                            </div>
                        </div>

                        <input type="hidden" id="Clat" name="lat">
                        <input type="hidden" id="Clng" name="lng">
                    </form>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</a>
                    <button type="submit" form="address-form-change" class="btn btn-success">ویرایش
                        آدرس</button>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.css" />
    <script src="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.js"></script>
    <script>
        // ----------- نقشه افزودن آدرس -----------
        var map = new L.Map('map', {
            key: "web.c5d3eb9f8e644df5bb120d4f8a1b5748",
            maptype: "neshan",
            poi: true,
            traffic: true,
            center: [35.6892, 51.3890],
            zoom: 14
        });

        var marker;

        function setMarker(lat, lng) {
            if (marker) {
                marker.setLatLng([lat, lng]);
            } else {
                marker = L.marker([lat, lng]).addTo(map);
            }
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
        }

        setMarker(35.6892, 51.3890);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                setMarker(pos.coords.latitude, pos.coords.longitude);
                map.panTo([pos.coords.latitude, pos.coords.longitude]);
            });
        }

        map.on('click', function(e) {
            setMarker(e.latlng.lat, e.latlng.lng);
        });


        // ----------- نقشه تغییر آدرس -----------
        var Cmap = new L.Map('Cmap', {
            key: "web.c5d3eb9f8e644df5bb120d4f8a1b5748",
            maptype: "neshan",
            poi: true,
            traffic: true,
            center: [35.6892, 51.3890],
            zoom: 14
        });

        var Cmarker;

        function setCMarker(lat, lng) {
            if (Cmarker) {
                Cmarker.setLatLng([lat, lng]);
            } else {
                Cmarker = L.marker([lat, lng]).addTo(Cmap);
            }
            document.getElementById('Clat').value = lat;
            document.getElementById('Clng').value = lng;
        }

        setCMarker(35.6892, 51.3890);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                setCMarker(pos.coords.latitude, pos.coords.longitude);
                Cmap.panTo([pos.coords.latitude, pos.coords.longitude]);
            });
        }

        Cmap.on('click', function(e) {
            setCMarker(e.latlng.lat, e.latlng.lng);
        });


        $('#modal-change-address').on('shown.bs.modal', function() {
            map.invalidateSize();
        });

        $('#modal-new-address').on('shown.bs.modal', function() {
            Cmap.invalidateSize();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\class\laravel\shop-app\resources\views/addresses/list.blade.php ENDPATH**/ ?>