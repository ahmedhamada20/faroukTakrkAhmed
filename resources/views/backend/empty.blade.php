@extends('backend.layout.master')
@section('title')
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> لوحة التحكم</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    //
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
