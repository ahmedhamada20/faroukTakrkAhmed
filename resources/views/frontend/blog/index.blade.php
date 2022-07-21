@extends('frontend.layout.master')
@section('title')
    {{__('app.blog')}}
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('app.blog')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('app.blog')}}</li>
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
                <h6 class="text-secondary text-uppercase">{{__('app.blog')}}</h6>
                <h1 class="mb-5">{{__('app.Explore_Our_blog')}}</h1>
            </div>
            <div class="row g-4">
                @forelse($blogs as $blog)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                {{-- @foreach($blog->photo as $row) --}}
                                    @if($blog->photo)
                                        <img class="img-fluid" src="{{asset('admin/pictures/blog/'.$blog->id . '/' . $blog->photo->Filename)}}" alt="">
                                    @endif
                                {{-- @endforeach --}}


                            </div>
                            <h4 class="mb-3">{{$blog->name}}</h4>
                            <p>{!! $blog->notes !!}</p>


                            <a class="btn-slide mt-2" href="{{route('blogDelis',preg_replace('/\s+/', '-', $blog->slug))}}"><i
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
