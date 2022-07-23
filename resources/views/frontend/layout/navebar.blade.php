<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{route('home')}}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        @if($setting->photo)
        <img src="{{asset('admin/pictures/setting/' . $setting->id .'/' .$setting->photo->Filename)}}" alt="Demo Image"
            style="width: 150px !important;height: 70px !important;">
        @endif
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link {{ getActiveRoutesHome('home')}}">{{ __('app.Home')
                }}</a>
            <a href="{{route('user_about')}}" class="nav-item nav-link {{ getActiveRoutesHome('user_about')}}">{{
                __('app.About') }}</a>
            <a href="{{route('user_service')}}" class="nav-item nav-link {{ getActiveRoutesHome('user_service')}}">{{
                __('app.Services') }}</a>
            <a href="{{route('product_all')}}" class="nav-item nav-link {{ getActiveRoutesHome('product_all')}}">{{
                __('app.product') }}</a>
            <a href="{{route('blog_all')}}" class="nav-item nav-link {{ getActiveRoutesHome('blog_all')}}">{{
                __('app.blog') }}</a>
            <a href="{{route('user_gallery')}}" class="nav-item nav-link {{ getActiveRoutesHome('user_gallery')}}">{{
                __('Gallery') }}</a>
            {{-- <div class="nav-item dropdown">--}}
                {{-- <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('app.Franchise')
                    }}</a>--}}
                {{-- <div class="dropdown-menu fade-up m-0">--}}
                    {{-- @forelse($agencies as $agencie)--}}
                    {{-- <a href="{{route('user_franchise',preg_replace('/\s+/', '-',$agencie->slug))}}"
                        class="dropdown-item">{{$agencie->name}}</a>--}}
                    {{-- @empty--}}
                    {{-- @endforelse--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            <a href="{{route('user_contact')}}" class="nav-item nav-link {{ getActiveRoutesHome('user_contact')}}">{{
                __('app.Contact') }}</a>



            <a href="#"  class="nav-item nav-link   {{ getActiveRoutesHome('request_price')}}"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 5px">{{ __('app.requestPrice') }}</a>
            <div class="dropdown ">
                <button class="btn btn-primary dropdown-toggle mt-3" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{trans('app.lang')}}
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <h4 class="m-0  pe-lg-5 d-none d-lg-block" style="margin-left: 5px !important;"><i
            class="fa fa-headphones text-primary me-3"></i>{{$setting->phone}}</h4>
    </div>
</nav>
<!-- Navbar End -->

{{-- Model Request Price --}}


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('app.requestPrice') }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('requestPrice') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col">
                        <label>{{ __('app.YourName') }}</label>
                        <input type="text" name="name" required class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="col">
                        <label>{{ __('app.YourEmail') }}</label>
                        <input type="email" name="email" required class="form-control">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>

                <br>


                <div class="row">
                    <div class="col">
                        <label>{{ __('app.YourMobile') }}</label>
                        <input type="number" name="number" required class="form-control">
                        @error('number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="col">
                        <label>{{ __('app.name_Factory') }}</label>
                        <input type="text" name="name_Factory" required class="form-control">
                        @error('name_Factory')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <label>{{ __('app.Activity') }}</label>
                        <select class="form-control" name="Activity" required>
                            <option value="" disabled selected>-- {{ __('app.selected') }} --</option>
                            <option value="existing">{{ __('app.existing') }}</option>
                            <option value="new">{{ __('app.new') }}</option>
                        </select>
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col">
                        <button class="btn btn-success">{{ __('app.save') }}</button>
                    </div>
                </div>

            </form>
        </div>

      </div>
    </div>
  </div>


