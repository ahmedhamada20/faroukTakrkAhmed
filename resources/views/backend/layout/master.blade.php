<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
@include('backend.layout.header')
</head>
<body>
<div class="wrapper">
    <div id="pre-loader">
        <img src="{{asset('backend/images/pre-loader/loader-01.svg')}}" alt="">
    </div>
@include('backend.layout.navebar')
    <div class="container-fluid">
        <div class="row">
@include('backend.layout.sidebar')
            <div class="content-wrapper">
@yield('content')
@include('backend.layout.footer')
            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>
@include('backend.layout.footerjs')
</body>
</html>
