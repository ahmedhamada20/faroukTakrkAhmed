<!-- jquery -->
<script src="{{asset('backend/js/jquery-3.3.1.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('backend/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script>var plugin_path = '{{asset('backend/js/')}}';</script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>
<!-- chart -->
<script src="{{asset('backend/js/chart-init.js')}}"></script>

<!-- calendar -->
<script src="{{asset('backend/js/calendar.init.js')}}"></script>

<!-- charts sparkline -->
<script src="{{asset('backend/js/sparkline.init.js')}}"></script>

<!-- charts morris -->
<script src="{{asset('backend/js/morris.init.js')}}"></script>

<!-- datepicker -->
<script src="{{asset('backend/js/datepicker.js')}}"></script>

<!-- sweetalert2 -->
<script src="{{asset('backend/js/sweetalert2.js')}}"></script>

<!-- toastr -->
<script src="{{asset('backend/js/toastr.js')}}"></script>

<!-- validation -->
<script src="{{asset('backend/js/validation.js')}}"></script>

<!-- lobilist -->
<script src="{{asset('backend/js/lobilist.js')}}"></script>
<script src="{{asset('backend/js/bootstrap-datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap-datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- custom -->

<script src="{{asset('backend/vendor/boorstarp-fileUpdload/js/plugins/piexif.min.js')}}"></script>
<script src="{{asset('backend/vendor/boorstarp-fileUpdload/js/plugins/sortable.min.js')}}"></script>
<script src="{{asset('backend/vendor/boorstarp-fileUpdload/js/fileinput.min.js')}}"></script>
<script src="{{asset('backend/vendor/boorstarp-fileUpdload/themes/fa5/theme.min.js')}}"></script>

<script src="{{asset('backend/js/custom.js')}}"></script>
<script src="{{asset('backend/select/js/select2.full.min.js')}}"></script>
<script src="{{asset('backend/textarea/summernote-bs4.js')}}"></script>

@toastr_js
@toastr_render
@yield('js')
<script>


    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });
    $(document).ready(function () {
        $('#summernote2').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
@yield('js')
