@extends('backend.layout.master')
@section('title')
    الاعدادت الرئيسه
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
        <div class="col-xl-12 col-lg-12 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form action="{{route('setting.update','test')}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label>الاسم الموقع بالغه العربيه</label>
                                <input type="text" name="name" class="form-control" value="{{$data->getTranslation('name','ar')}}">
                            </div>

                            <div class="col">
                                <label>اسم الموقع بالغه الانجليزيه</label>
                                <input type="text" name="name_en" class="form-control" value="{{$data->getTranslation('name','en')}}">
                            </div>


                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>رقم الهاتف</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>الفاكس</label>
                                <input type="text" name="Fax" value="{{$data->Fax}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>عنوان الموقع</label>
                                <input type="text" name="url" value="{{$data->url}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>البريد الالكتورني</label>
                                <input type="email" name="email" value="{{$data->email}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>العنوان</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>رابط صفحه الفيس بوك</label>
                                <input type="url" name="facebook" value="{{$data->facebook}}" class="form-control">
                            </div>


                            <div class="col">
                                <label>رابط صفحه تويتر</label>
                                <input type="url" name="twitter" value="{{$data->twitter}}" class="form-control">
                            </div>


                            <div class="col">
                                <label>رابط صفحه الانستجرام</label>
                                <input type="url" name="instagram" value="{{$data->instagram}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>رابط صفحه اليوتيوب</label>
                                <input type="url" name="YouTube" value="{{$data->YouTube}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>وصف الموقع بالغه العربيه</label>
                                <textarea class="form-control" name="notes" rows="5" id="summernote">
                                 {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>وصف الموقع بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="summernote2">
                                 {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>


                        @if($data->photo)
                            <img src="{{asset('admin/pictures/setting/' . $data->id .'/' .$data->photo->Filename)}}" width="50" height="50" alt="">
                        @endif

                        <div class="row">
                            <div class="col">
                                <label for="">صور الموقع</label><br>
                                <input type="file" name="filename" accept="image/*">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تحديث البيانات</button>
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
