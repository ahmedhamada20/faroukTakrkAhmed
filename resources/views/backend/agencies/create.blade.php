@extends('backend.layout.master')
@section('title')
  اضافه توكيل جديد
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">اضافه توكيل جديد</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">اضافه توكيل جديد</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form action="{{route('agencies.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label>الاسم بالغه العربيه</label>
                                <input type="text" name="name" required value="{{old('name')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>

                            <div class="col">
                               <label>الاسم بالغه الانجليزيه</label>
                                <input type="text" name="name_en" required value="{{old('name')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>

                        <br>


                        <div class="row">

                            <div class="col">
                                <label>الرابط المساعد</label>
                                <input type="text" name="slug" required class="form-control">
                            </div>

                            <div class="col">
                                <label>رابط الفديو</label>
                                <input type="url" name="url" required class="form-control">
                            </div>

                            <div class="col">
                                <label>الحاله</label>
                                <select class="form-control p-1" name="status" required>
                                    <option value="" disabled selected>-- Choose --</option>
                                    <option value="1">Active</option>
                                    <option value="0"> No Active</option>
                                </select>
                            </div>
                        </div>



                        <br>
                        <div class="row">
                            <div class="col">
                               <label>الوصف بالغه العربيه </label>
                                <textarea class="form-control" name="notes" rows="5" id="summernote">

                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                               <label>الوصف بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="summernote2">

                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>ملف </label>
                                <input type="file" name="bdf" id="image_updload_bdf" multiple accept="application/pdf" class="file-input-overview">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>الصوره</label>
                                <input type="file" name="FilenameMany[]" id="image_updload" multiple accept="image/*" class="file-input-overview">
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
                maxFileCount: 20,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>

    <script>
        $(function () {
            $("#image_updload_bdf").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['pdf'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>
@endsection
