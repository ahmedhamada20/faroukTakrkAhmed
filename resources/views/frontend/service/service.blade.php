@extends('frontend.layout.master')
@section('title')
    Service
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">{{__('app.Services')}}</h6>
                <h1 class="mb-5">{{__('app.Explore_Our_Services')}}</h1>
            </div>
            <div class="row g-4">
                @forelse($servs as $service)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                @if($service->photo)
                                    <img class="img-fluid"
                                         src="{{asset('admin/pictures/service/'. $service->id . '/' . $service->photo->Filename)}}"
                                         alt="" style="height: 300px">
                                @else
                                    <img class="img-fluid" src="{{asset('frontend/img/service-1.jpg')}}" alt="">
                                @endif

                            </div>
                            <h4 class="mb-3">{{$service->name}}</h4>
                            <p>{!! $service->notes !!}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('frontend/img/service-1.jpg')}}" alt="">

                            </div>
                            <h4 class="mb-3">خدمات الموقع</h4>
                            <p>ملاخظات</p>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
@section('js')
@endsection
