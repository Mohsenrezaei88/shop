@include('auth.layout.header')
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1100;">
    @if (session()->has('success'))
        <div id="successToast" class="toast colored-toast bg-success-transparent" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-success text-fixed-white">
                <img class="bd-placeholder-img rounded me-2" src="{{ url('assets/images/brand-logos/toggle-dark.png') }}"
                    alt="...">
                <strong class="me-auto">Xintra</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-white">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session()->has('error'))
        <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-danger text-fixed-white">
                <img class="bd-placeholder-img rounded me-2"
                    src="{{ url('assets/images/brand-logos/toggle-dark.png') }}" alt="...">
                <strong class="me-auto">Xintra</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body bg-white">
                {{ session('error') }}
            </div>
        </div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header bg-danger text-fixed-white">
                    <img class="bd-placeholder-img rounded me-2"
                        src="{{ url('assets/images/brand-logos/toggle-dark.png') }}" alt="...">
                    <strong class="me-auto">Shop</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body bg-white">
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
<div class="row authentication authentication-cover-main mx-0">
    @yield('content')
</div>
@include('auth.layout.footer')
