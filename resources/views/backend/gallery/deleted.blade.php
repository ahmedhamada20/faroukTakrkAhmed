<!-- Modal -->
<div class="modal fade" id="deleted{{$gallery->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delete_gallery',$gallery->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="id" value="{{$gallery->id}}">

                    <p class="text-danger">هل انت متأكد من عمليه الحذف</p>
                    <input type="text" readonly value="{{$gallery->name}}" class="form-control">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حذف</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
