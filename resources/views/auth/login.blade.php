@extends('auth.layout.master')

<head>
    <title>ورود</title>
</head>
@section('content')
    <div class="col-xxl-6 col-xl-7">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-auto border">
                    <div class="card-body p-5">
                        <p class="h5 mb-2 text-center">ورود</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">خوش برگشتی محسن!</p>
                        <div class="d-flex mb-3 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                            <button
                                class="btn btn-lg btn-light-ghost border d-flex align-items-center justify-content-center flex-fill bg-light">
                                <span class="avatar avatar-xs flex-shrink-0">
                                    <img src="./assets/images/media/apps/google.png" alt="">
                                </span>
                                <span class="lh-1 ms-2 fs-13 text-default">ورود با گوگل</span>
                            </button>
                        </div>
                        <div class="text-center my-3 authentication-barrier">
                            <span>یا</span>
                        </div>
                        <form action="{{ route('login.post') }}" method="post">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="phonenumber" class="form-label text-default">شماره تلفن</label>
                                    <input value="{{ old('phonenumber') }}" name="phonenumber" type="text"
                                        class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" placeholder="شماره تفن">
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="password" class="form-label text-default d-block">
                                        رمز عبور
                                        <a href="reset-password-basic.html" class="float-end fw-normal text-muted">فراموشی
                                            رمز
                                            عبور؟</a>
                                    </label>
                                    <div class="position-relative">
                                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror create-password-input"
                                            id="password" placeholder="رمز عبور">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" href="index.html" class="btn btn-primary">ورود</ذ>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="text-muted mt-3 mb-0">حساب کاربری ندارید؟ <a href="{{ route('register') }}"
                                    class="text-primary">ثبت نام</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none px-0">
        <div class="authentication-cover overflow-hidden">
            <div class="authentication-cover-logo">
                <a href="index.html">
                    <img src="./assets/images/brand-logos/desktop-white.png" alt=""
                        class="authentication-brand desktop-white">
                </a>
            </div>
            <div class="aunthentication-cover-content d-flex align-items-center justify-content-center">
                 <div>
                    <h3 class="text-fixed-white mb-1 fw-medium">خوش آمدید!</h3>
                    <h6 class="text-fixed-white mb-3 fw-medium">وارد حساب کاربری خود شوید</h6>
                    <p class="text-fixed-white mb-1 op-6">به فروشگاه موبایل خوش آمدید. لطفاً وارد شوید
                        تا به بقیه اطلاعات دسترسی داشته باشید اطلاعات ورود شما تضمین‌کننده یکپارچگی و عملکرد سیستم است.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
