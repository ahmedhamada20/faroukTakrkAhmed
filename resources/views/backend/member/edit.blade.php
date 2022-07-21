@extends('backend.layout.master')
@section('title')
    تعديل
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">تعديل</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">تعديل</a></li>
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
                    <form action="{{route('member.update','test')}}" method="post" autocomplete="off"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="row">
                            <div class="col">
                               <label>الاسم بالغه العربيه</label>
                                <input type="text" name="name" value="{{$data->getTranslation('name','ar')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>الاسم بالغه الانجليزيه</label>
                                <input type="text" name="name_en" value="{{$data->getTranslation('name','en')}}"
                                       class="form-control @error('name') is-invalid @enderror">
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
                        </div>
                        <br>

                        <div class="col">
                             <label>الحاله</label>
                            <select class="form-control p-1" name="status">
                                <option value="1" {{$data->status == 1 ? 'selected' : null}}>Active</option>
                                <option value="0" {{$data->status == 0 ? 'selected' : null}}> No Active</option>
                            </select>
                        </div>


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

                        <div class="row">
                            <div class="col">
                                <label>الصوره</label>
                                <input type="file" name="cover" id="image_updload" multiple accept="image/*"
                                       class="file-input-overview">
                                <input type="hidden" name="oldfile" value="{{$data->photo->Filename ?? ''}}">
                            </div>
                        </div>


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
                initialPreview: [
                    @if($data->photo)
                        "{{asset('admin/pictures/member/' . $data->id . '/'  . $data->photo->Filename)}}"
                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',

                @if($data->photo)
                initialPreviewConfig: [
                    {
                        caption: "{{$data->photo->Filename}}",
                        size: '111',
                        width: "120px",
                        url: "{{route('member_remove_image',['data_id' => $data->id,'photo_id' => $data->photo->id ,'photo_name' => $data->photo->Filename, '_token' => csrf_token()])}}",
                        key: {{$data->photo->id}}
                    }
                ]
                @endif

            });
        });
    </script>
@endsection
