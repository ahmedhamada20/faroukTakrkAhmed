<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="description" content="Admin Panel" />
<meta name="author" content="faroukgroup.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}" />
<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
<!-- css -->
<link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{asset('backend/css/style.css')}}" />
<link href="{{asset('backend/select/css/select2.min.css')}}" rel="stylesheet">
{{--<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">--}}
<link href="{{asset('backend/vendor/boorstarp-fileUpdload/css/fileinput.css')}}" rel="stylesheet">
<link href="{{asset('backend/textarea/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{asset('backend/textarea/summernote-bs4.min.css')}}" rel="stylesheet">
<!-- Custom styles for this page -->

@yield('css')
@toastr_css
