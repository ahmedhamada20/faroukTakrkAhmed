@extends('backend.layout.master')
@section('title')
    الخدمات
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">الخدمات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">الخدمات</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('service.create')}}" class="btn btn-success btn-sm">اضافه جديده</a>
                </div>
                @include('backend.service.search')
            </div>
        </div>
    </div>

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
                                <th>الحاله</th>
                                <th>الوصف</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as  $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->Status()}}</td>
                                    <td>{{$row->notes ?? 'لا توجد ملاحظات'}}</td>
                                    <td>
                                        <a href="{{route('service.edit',$row->id)}}" class="btn btn-sm btn-success"><i
                                                class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @include('backend.service.deleted')
                                </tr>
                            @endforeach
                        </table>
                        {{ $data->render("pagination::bootstrap-4") }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
