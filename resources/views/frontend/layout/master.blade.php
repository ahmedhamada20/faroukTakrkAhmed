<!DOCTYPE html>
<html lang="en" dir="{{ app()->getLocale()=='ar'?'rtl':'ltr' }}">
<head>
@include('frontend.layout.header')
</head>
<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
@include('frontend.layout.navebar')
@yield('content')

@include('frontend.layout.footer')
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
@include('frontend.layout.footerjs')
</body>

</html>
