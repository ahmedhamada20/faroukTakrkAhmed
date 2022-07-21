@extends('frontend.layout.master')
@section('title')
{{__('app.show_product')}} / {{$data->name}}
@endsection
@section('css')
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('app.show_product')}} / {{$data->name}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{__('app.show_product')}} /
                    {{$data->name}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<div class="container">
    @if (session('message'))
    <div class="alert alert-success" role="alert">
     {{ session('message') }}
      </div>
  @endif
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    @foreach($data->photos as $slider)
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="true" aria-label="Slide 1"></button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach($data->photos as $slider)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{asset('admin/pictures/product/' . $data->id .'/' .$slider->Filename)}}"
                            class="d-block w-100" alt="..." style="white-space: 100%;height: 400px">
                    </div>
                    @endforeach
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item w-100" src="{{$data->url}}" allowfullscreen
                    style="height: 400px ;"></iframe>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-8">
                <p style="font-family: 'Cairo', sans-serif; ">{!! $data->notes !!}</p>
            </div>
            @if($data->bdf)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Download PDF</h5>
                    </div>

                    <div class="card-body">
                        <a href="{{asset('admin/bdf/product/'.$data->id.'/'.$data->bdf->Filename)}}"
                            class="btn btn-danger" download="">Download</a>
                    </div>

                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <div class="bg-light text-center p-5 ">
                <form action="{{route('request_product.store')}}" method="post">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $data->id }}">

                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="{{ __('app.YourName') }}"
                                name="name" style="height: 55px;" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" placeholder="{{ __('app.YourEmail') }}"
                                name="email" style="height: 55px;" required>
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control border-0" placeholder="{{ __('app.YourMobile') }}"
                                name="number" style="height: 55px;" required>
                        </div>

                    </div>

                    <br>

                    <div class="row g-3">

                        <div class="col-12">
                            <textarea class="form-control border-0" placeholder="Special Note" name="notes"
                                required></textarea>
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
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@endsection