@extends('frontend.layout.master')
@section('title')
    Image Gallery
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Image Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Image Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Page Content -->
    <div class="container page-top">



        <div class="row">

            @foreach($gallerys as $gallery)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('upload/gallery/'.$gallery->image)}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('upload/gallery/'.$gallery->image)}}" class="zoom img-fluid "  alt="">

                </a>
            </div>
            @endforeach


        </div>




    </div>
@endsection
@section('js')

@endsection
