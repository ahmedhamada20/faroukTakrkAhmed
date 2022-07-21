@extends('frontend.layout.master')
@section('title')
{{__('app.show_Service')}} / {{$data->name}}
@endsection
@section('css')
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('app.show_Service')}} / {{$data->name}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{__('app.show_Service')}} /
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
        <div class="col-md-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @if($data->photo)
                        <img src="{{ asset('admin/pictures/service/'.$data->id . '/' . $data->photo->Filename) }}" class="d-block w-100" alt="...">
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-8">
                <p style="font-family: 'Cairo', sans-serif; ">{!! $data->notes !!}</p>
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