@extends('backend.layout.master')
@section('title')
   طلب 
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">طلبات </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">طلبات </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->

    <h3 class="text-center">Contact Request In franchise</h3>
    <div class="row">
        <div class="col">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable1" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الألكتروني</th>
                                <th>الهاتف</th>
                                <th>ملاحظات</th>
                                <th>الخدمه</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($contacts as  $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->services->name}}</td>
                                    <td>{{Str::limit($contact->notes,40)}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleted{{$contact->id}}"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @include('backend.contact.deleted')
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>


    <h3 class="text-center mb-2">Product Request In franchise</h3>
    <div class="row">
        <div class="col">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الألكتروني</th>
                                <th>الهاتف</th>
                                <th>المنتج</th>
                                <th>ملاحظات</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as  $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->number}}</td>
                                    <td>{{$row->product->name}}</td>
                                    <td>{{Str::limit($row->notes,40)}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @include('backend.product_request.deleted')
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
