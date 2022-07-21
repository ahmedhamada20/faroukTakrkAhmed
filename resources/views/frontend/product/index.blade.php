@extends('frontend.layout.master')
@section('title')
    {{__('app.product')}}
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('app.product')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('app.product')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Service Start -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">{{__('app.product')}}</h6>
                <h1 class="mb-5">{{__('app.Explore_Our_product')}}</h1>
            </div>
            <div class="row g-4">
                @forelse($products as $product)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                @foreach($product->photos as $row)
                                    @if($loop->first)
                                        <img class="img-fluid" src="{{asset('admin/pictures/product/'.$product->id . '/' . $row->Filename)}}" alt="" style="height: 300px">
                                    @endif
                                @endforeach


                            </div>
                            <h4 class="mb-3">{{$product->name}}</h4>
                            <p>{!! $product->notes !!}</p>


                            <a class="btn-slide mt-2" href="{{route('productDelis',preg_replace('/\s+/', '-', $product->slug))}}"><i
                                    class="fa fa-arrow-right"></i><span>Read More</span></a>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Service End -->
@endsection
@section('js')
@endsection
