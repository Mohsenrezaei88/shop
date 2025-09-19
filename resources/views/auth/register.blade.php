@extends('auth.layout.master')
@section('content')
    <div class="col-xxl-6 col-xl-7">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-5 border">
                    <div class="card-body p-5">
                        <p class="h5 mb-2 text-center">ثبت نام</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">خوش آمدید! با ایجاد حساب
                            کاربری خود شروع کنید.</p>
                        <div class="d-flex mb-3 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                            <button
                                class="btn btn-lg border d-flex align-items-center justify-content-center flex-fill btn-light">
                                <span class="avatar avatar-xs">
                                    <img src="./assets/images/media/apps/google.png" alt="">
                                </span>
                                <span class="lh-1 ms-2 fs-13 text-default">ثبت نام با گوگل</span>
                            </button>
                        </div>
                        <div class="text-center my-3 authentication-barrier">
                            <span>یا</span>
                        </div>
                        <form method="post" action="{{ route('register.post') }}">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signup-firstname" class="form-label text-default">نام
                                        کامل<sup class="fs-12 text-danger">*</sup></label>
                                    <input name= "name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="signup-firstname" placeholder="نام کامل">
                                </div>
                                <div class="col-xl-12">
                                    <label for="phonenumber" class="form-label text-default">شماره تلفن<sup
                                            class="fs-12 text-danger">*</sup></label>
                                    <input name="phonenumber" value="{{ old('phonenuumber') }}" type="text"
                                        class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" placeholder="شماره تلفن">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-password" class="form-label text-default">رمز
                                        عبور<sup class="fs-12 text-danger">*</sup></label>
                                    <div class="position-relative">
                                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror create-password-input"
                                            id="signup-password" placeholder="رمز عبور">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('signup-password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-confirmpassword" class="form-label text-default">تأیید رمز
                                        عبور<sup class="fs-12 text-danger">*</sup></label>
                                    <div class="position-relative">
                                        <input name="password_confirmation" type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror create-password-input" id="signup-confirmpassword"
                                            placeholder="تأیید رمز عبور">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('signup-confirmpassword',this)" id="button-addon21"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="form-text text-danger">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">ایجاد حساب کاربری</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="text-muted mt-3 mb-0">قبلاً حساب کاربری دارید؟ <a href="{{ route('login') }}"
                                    class="text-primary">ورود</a></p>
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
@endsection
