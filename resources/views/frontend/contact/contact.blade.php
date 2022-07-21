@extends('frontend.layout.master')
@section('title')
    Contact
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
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
        <div class="col-lg-12">
            <div class="bg-light text-center p-5 ">
                <form action="{{route('store_contact')}}" method="post">
                    @csrf
                    
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Your Name" name="name"
                                   style="height: 55px;" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" placeholder="Your Email" name="email"
                                   style="height: 55px;" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Your Mobile" name="phone"
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
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
