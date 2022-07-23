@extends('frontend.layout.master')
@section('title')
    About Us
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        @if($aboutUs->photo)
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('admin/pictures/aboutUs/'.$aboutUs->id.'/'.$aboutUs->photo->Filename)}}"
                                 style="object-fit: cover;" alt="">
                        @else
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('frontend/img/about.jpg')}}" style="object-fit: cover;" alt="">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">{{__('app.aboutUs')}}</h6>
                    <h1 class="mb-5">{{$aboutUs->name}}</h1>
                    <p class="mb-5">{!! $aboutUs->notes !!}</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            @if($aboutUs->icon_1)
                                {!! $aboutUs->icon_1!!}
                            @else
                                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            @endif

                            <h5>{{$aboutUs->title_1}}</h5>
                            <p class="m-0">{{$aboutUs->notes_1}}</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            @if($aboutUs->icon_2)
                            {!! $aboutUs->icon_2!!}
                            @else
                                <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            @endif
                            <h5>{{$aboutUs->title_2}}</h5>
                            <p class="m-0">{{$aboutUs->notes_2}}</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">{{__('app.Our_Features')}}</h6>
                    <h1 class="mb-5">{{$Features->name}}</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        @if($Features->icon_1)
                        {!! $Features->icon_1!!}
                            
                        @else
                            <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        @endif

                        <div class="ms-4">

                            <h5>{{$Features->title_1}}</h5>
                            <p class="mb-0">{{$Features->notes_1}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        @if($Features->icon_2)
                        {!! $Features->icon_2!!}
                            
                        @else
                            <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                        @endif

                        <div class="ms-4">
                            <h5>{{$Features->title_2}}</h5>
                            <p class="mb-0">{{$Features->notes_2}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        @if($Features->icon_3)
                            
                            {!! $Features->icon_3!!}
                        @else
                            <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                        @endif

                        <div class="ms-4">
                            <h5>{{$Features->title_3}}</h5>
                            <p class="mb-0">{{$Features->notes_3}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        @if($Features->photo)
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('admin/pictures/qutFeatures/'. $Features->id . '/' . $Features->photo->Filename)}}"
                                 style="object-fit: cover;" alt="">
                        @else
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('frontend/img/feature.jpg')}}"
                                 style="object-fit: cover;" alt="">
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
@endsection
@section('js')
@endsection
