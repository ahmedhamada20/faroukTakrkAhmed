<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4" style="margin: 5px">{{__('app.Address')}}</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3" style="margin: 5px"></i>{{$setting->address}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3" style="margin: 5px"></i>{{$setting->phone}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3" style="margin: 5px"></i>{{$setting->email}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target="_blank" href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="{{$setting->YouTube}}"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                @forelse($services as $service)
                    <a class="btn btn-link" href="">{{$service->name}}</a>
                @empty

                @endforelse

            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{route('user_about')}}">{{ __('app.About') }}</a>
                <a class="btn btn-link" href="{{route('user_contact')}}">{{ __('app.Contact') }}</a>
                <a class="btn btn-link" href="{{route('user_service')}}">{{ __('app.Services') }}</a>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6   mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="https://elwadi-trade.com/en">Elwadi Trade</a>, All Right Reserved.
                </div>
                <div class="col-md-6  ">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Powered By <a class="border-bottom" href="https://faroukgroup.com">Farouk Group</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
