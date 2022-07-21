@extends('backend.layout.master')
@section('title')
  معلومات التواصل عنا
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> معلومات التواصل عنا</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">معلومات التواصل عنا</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form action="{{route('quote.update','test')}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label>الاسم بالغه العربيه</label>
                                <input type="text" name="name" class="form-control" value="{{$data->getTranslation('name','ar')}}">
                            </div>

                            <div class="col">
                               <label>الاسم بالغه الانجليزيه</label>
                                <input type="text" name="name_en" class="form-control" value="{{$data->getTranslation('name','en')}}">
                            </div>

                            <div class="col">
                                <label>رقم الهاتف</label>
                                <input type="number" name="number" value="{{$data->number}}" class="form-control">
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>رمز </label>
                                <input type="text" name="icon_1" class="form-control" value="{{$data->icon_1}}">
                            </div>

                            <div class="col">
                                <label>العنوان بالغه العربيه</label>
                                <input type="text" name="title_1" class="form-control" value="{{$data->getTranslation('title_1','ar')}}">
                            </div>

                            <div class="col">
                                 <label>العنوان بالغه الانجليزيه</label>
                                <input type="text" name="title_1_en" class="form-control" value="{{$data->getTranslation('title_1','en')}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه العربيه </label>
                                <textarea class="form-control" name="notes" rows="2" id="summernote2">
                                    {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">

                            <div class="col">
                                <label>الوصف بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="2" id="summernote">
                                    {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تحديث</button>
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
