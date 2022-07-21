@extends('backend.layout.master')
@section('title')
    تعديل صورة
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">تعديل صورة</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">تعديل صورة</a></li>
                    <li class="breadcrumb-item active">لوحة التحكم</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form action="{{route('update_gallery',$gallery->id)}}" method="post" autocomplete="off"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$gallery->id}}">
                        <div class="row">
                            <div class="col">
                                  <label>الاسم</label>
                                <input type="text" name="name" value="{{$gallery->name}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <label>الصوره</label>
                                <input type="file" name="image" id="image_updload" multiple accept="image/*"
                                       class="file-input-overview">
                            </div>
                            <img src="{{asset('upload/gallery/'.$gallery->image)}}" alt="" style="width: 100%;
                            height: 200px">
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تعديل البيانات</button>
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
