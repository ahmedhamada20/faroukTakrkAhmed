<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

{{--<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>--}}
<script src="{{asset('frontend/js/fancybox.js')}}"></script>
{{--<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>--}}
<script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>



<!--- Style css -->
@if (App::getLocale() == 'en')
    <script src="{{asset('frontend/js/main.js')}}"></script>
@else
    <script src="{{asset('frontend/js/main.js')}}"></script>
@endif
<!-- Template Javascript -->

@yield('js')
