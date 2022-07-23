@extends('frontend.layout.master')
@section('title')
    Login
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Login To Your Account
                </div>
                <div class="card-header">
                    <div class="bg-light text-center p-5 ">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row g-3">

                                <div class="col-12 col-sm-12">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" name="email"
                                           style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="password" class="form-control border-0" placeholder="Password" name="password"
                                           style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
