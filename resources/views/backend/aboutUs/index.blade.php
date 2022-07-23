@extends('backend.layout.master')
@section('title')
   من نحن
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">  من نحن</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">من نحن</a></li>
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
                    <form action="{{route('aboutUs.update','test')}}" method="post" enctype="multipart/form-data">
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

                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>رمز 1</label>
                                <input type="text" name="icon_1" class="form-control" value="{{$data->icon_1}}">
                            </div>

                            <div class="col">
                                <label>عنوان بالغه العربيه 1 </label>
                                <input type="text" name="title_1" class="form-control" value="{{$data->getTranslation('title_1','ar')}}">
                            </div>

                            <div class="col">
                                <label>عنوان بالغه الانجليزيه 1</label>
                                <input type="text" name="title_1_en" class="form-control" value="{{$data->getTranslation('title_1','en')}}">
                            </div>

                            <div class="col">
                                <label>الوصف بالغه العربيه 1</label>
                                <input type="text" name="notes_1" class="form-control" value="{{$data->getTranslation('notes_1','ar')}}">
                            </div>


                            <div class="col">
                                <label>الوصف بالغه الانجليزيه 1</label>
                                <input type="text" name="notes_1_en" class="form-control" value="{{$data->getTranslation('notes_1','en')}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">

                            <div class="col">
                                <label>رمز 2</label>
                                <input type="text" name="icon_2" class="form-control" value="{{$data->icon_2}}">
                            </div>


                            <div class="col">
                                <label>عنوان بالغه العربيه 2 </label>
                                <input type="text" name="title_2" class="form-control" value="{{$data->getTranslation('title_2','ar')}}">
                            </div>

                            <div class="col">
                                  <label>عنوان بالغه الانجليزيه 2 </label>
                                <input type="text" name="title_2_en" class="form-control" value="{{$data->getTranslation('title_2','en')}}">
                            </div>

                            <div class="col">
                                <label>الوصف بالغه العربيه 2</label>
                                <input type="text" name="notes_2" class="form-control" value="{{$data->getTranslation('notes_2','ar')}}">
                            </div>


                            <div class="col">
                                <label>الوصف بالغه الانجليزيه 2</label>
                                <input type="text" name="notes_2_en" class="form-control" value="{{$data->getTranslation('notes_2','en')}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه العربيه </label>
                                <textarea class="form-control" name="notes" rows="5" id="summernote">
                                 {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="summernote2">
                                 {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>


                        @if($data->photo)
                            <img src="{{asset('admin/pictures/aboutUs/' . $data->id .'/' .$data->photo->Filename)}}" width="50" height="50" alt="">
                        @endif

                        <div class="row">
                            <div class="col">
                                <label for="">الصوره</label><br>
                                <input type="file" name="filename" accept="image/*">
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
