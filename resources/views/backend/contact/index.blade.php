@extends('backend.layout.master')
@section('title')
    طلبات التواصل
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">طلبات التواصل</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">طلبات التواصل</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->


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
                                    <td>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleted{{$contact->id}}"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#show{{$contact->id}}"><i class="fa fa-eye"></i></button>
                                    </td>
                                    @include('backend.contact.deleted')
                                    @include('backend.contact.show')
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
