@extends('backend.layout.master')
@section('title')
    معرض الصور
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">معرض الصور</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">معرض الصور</a>
                    </li>
                    <li class="breadcrumb-item active">لوحة التحكم</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('add_gallery')}}" class="btn btn-success btn-sm">اضافه صورة</a>
                </div>
                @include('backend.gallery.search')
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
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($gallerys as  $gallery)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img src="{{asset('upload/gallery/'.$gallery->image)}}" alt="" style="width: 50px;height: 50px;border-radius: 50%"></td>
                                    <td>{{$gallery->name}}</td>
                                    <td>
                                        <a href="{{route('edit_gallery',$gallery->id)}}" class="btn btn-sm btn-success"><i
                                                class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleted{{$gallery->id}}"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @include('backend.gallery.deleted')
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
