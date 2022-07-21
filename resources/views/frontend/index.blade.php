@extends('frontend.layout.master')
@section('title')
    {{trans('app.home')}}
@endsection
@section('css')
@endsection
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 ">
        <div class="owl-carousel header-carousel position-relative">

            @forelse($sliders as $slider)
                <div class="owl-carousel-item position-relative">
                    @if($slider->photo)
                        <img class="img-fluid"
                             src="{{asset('admin/pictures/silder/'.$slider->id.'/'.$slider->photo->Filename)}}" alt="">
                    @else
                        <img class="img-fluid" src="{{asset('frontend/img/carousel-1.jpg')}}" alt="">
                    @endif

                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                         style="background: rgba(6, 3, 21, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">{{$slider->name}}</h1>
                                    <h1 class="text-white text-white mb-3 animated slideInDown">{!! $slider->notes !!}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden">
        <div class="container about ">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        @if($aboutUs->photo)
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('admin/pictures/aboutUs/'.$aboutUs->id.'/'.$aboutUs->photo->Filename)}}"
                                 style="object-fit: cover;height:400px !important" alt="">
                        @else
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('frontend/img/about.jpg')}}"  alt="">
                        @endif
                    </div>

                    
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">{{__('app.About')}}</h6>
                    <h1 class="mb-5">{{$aboutUs->name}}</h1>
                    <p class="mb-5">{!! $aboutUs->notes !!}</p>
                                     <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            @if($aboutUs->icon_1)
                                {!!$aboutUs->icon_1!!}
                            @else
                                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            @endif

                            <h5>{{$aboutUs->title_1}}</h5>
                            <p class="m-0">{{$aboutUs->notes_1}}</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            @if($aboutUs->icon_2)
                                {!!$aboutUs->icon_2!!}
                            @else
                                <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            @endif
                            <h5>{{$aboutUs->title_2}}</h5>
                            <p class="m-0">{{$aboutUs->notes_2}}</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">

             @foreach ($services as $service)
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
                    <h4 class="mb-3">{{ $service->name }}</h4>
                    <p>{!! $service->notes !!}</p>
                    <a class="btn-slide mt-2" href="{{ route('servicesDelis',preg_replace('/\s+/', '-', $service->slug)) }}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>

             @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">{{__('app.Our_Features')}}</h6>
                    <h1 class="mb-5">{{$Features->name}}</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        @if($Features->icon_1)
                            {!!$Features->icon_1!!}
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
                            {{$Features->icon_2}}
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
                            {{$Features->icon_3}}
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
                                  alt="">
                        @else
                            <img class="position-absolute img-fluid w-100 h-100"
                                 src="{{asset('frontend/img/feature.jpg')}}"
                                  alt="">
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">{{__('app.Quote')}}</h6>
                    <h1 class="mb-5">{{$quote->name}}</h1>
                    <p class="mb-5">{!!$quote->notes !!}</p>
                    <div class="d-flex align-items-center">
                        @if($quote->icon_1)
                            {{$quote->icon_1}}
                        @else
                            <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        @endif

                        <div class="ps-4">
                            <h6>{{$quote->title_1}}</h6>
                            <h3 class="text-primary m-0">{{$quote->number}}</h3>
                        </div>
                    </div>


                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 ">
                        <form action="{{route('store_contact')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="{{ __('app.YourName') }}" name="name"
                                           style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="{{ __('app.YourEmail') }}" name="email"
                                           style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="{{ __('app.YourMobile') }}" name="phone"
                                           style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" name="service_id" style="height: 55px;" required>
                                        <option selected disabled>Select A Service</option>
                                        @foreach($servics as $servic)
                                        <option value="{{$servic->id}}">{{$servic->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note" name="notes" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">{{ __('app.Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Team</h6>
                <h1 class="mb-5">Expert Team Members</h1>
            </div>
            <div class="row g-4">
                @foreach ($members as $member)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            @if($member->photo)
                                    <img class="img-fluid" src="{{asset('admin/pictures/member/'. $member->id . '/' . $member->photo->Filename)}}" alt="" style="height: 300px">
                                @else

                                    <img class="img-fluid" src="{{asset('frontend/img/team-1.jpg')}}" alt="">
                                @endif
                        </div>
                        <h5 class="mb-0">{{ $member->name }}</h5>
                        <p>{{ $member->notes }}</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                                <a href="{{ $member->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $member->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $member->instagram }}"><i class="fab fa-instagram"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
              @foreach ($qurClients as $qurClient)
              <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">


                    @if($qurClient->photo)
                    <img class="img-fluid flex-shrink-0" src="{{asset('admin/pictures/qurClient/'.$qurClient->id . '/' . $qurClient->photo->Filename)}}"
                         style="width: 80px; height: 80px;">
                @else
                    <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/testimonial-1.jpg')}}"
                         style="width: 80px; height: 80px;">
                @endif
                    <div class="ms-4">
                        <h5 class="mb-1">{{ $qurClient->name }}</h5>
                        <p class="m-0">{{ $qurClient->jop }}</p>
                    </div>
                </div>
                <p class="mb-0">{!! $qurClient->notes !!}</p>
            </div>
              @endforeach


            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
@section('js')
@endsection
