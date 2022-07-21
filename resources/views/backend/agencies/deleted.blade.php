<!-- Modal -->
<div class="modal fade" id="deleted{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('agencies.destroy',$row->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="id" value="{{$row->id}}">

                    <p class="text-danger">هل انت متأكد من عمليه الحذف</p>
                    <input type="text" readonly value="{{$row->name}}" class="form-control">
                    <input type="hidden" name="oldfile" value="{{$data->photo->Filename ?? ''}}">


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حذف</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
