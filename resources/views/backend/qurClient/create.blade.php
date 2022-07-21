@extends('backend.layout.master')
@section('title')
اضافه راي جديد
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">اضافه راي جديد</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">اضافه راي جديد</a>
                </li>
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
                <form action="{{route('qurClient.store')}}" method="post" autocomplete="off"
                    enctype="multipart/form-data">
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

                    <option value=""></option>

                    <div class="row">
                        <div class="col">
                            <label>المسمي الوظيفي</label>
                            <input type="text" name="jop" required value="{{old('jop')}}"
                                class="form-control @error('jop') is-invalid @enderror">
                        </div>
                    </div>

                    <br>

                    <div class="col">
                        <label>الحاله</label>
                        <select class="form-control p-1" name="status" required>
                            <option value="" disabled selected>-- Choose --</option>
                            <option value="1">Active</option>
                            <option value="0"> No Active</option>
                        </select>
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
                            <label>الصوره</label>
                            <input type="file" name="cover" id="image_updload" multiple accept="image/*"
                                class="file-input-overview">
                        </div>
                    </div>




                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">اضافه</button>
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