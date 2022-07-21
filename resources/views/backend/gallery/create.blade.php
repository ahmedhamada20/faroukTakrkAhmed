@extends('backend.layout.master')
@section('title')
    اضافه صورة جديد
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">اضافه صورة جديد</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">اضافه صورة جديد</a></li>
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
                    <form action="{{route('store_gallery')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label>الاسم</label>
                                <input type="text" name="name" required value="{{old('name')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>الصوره</label>
                                <input type="file" name="image" id="image_updload" multiple accept="image/*" class="file-input-overview">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">حفظ البيانات</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function () {
            $("#image_updload").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>
@endsection
