@extends('front-end.layouts.app')
@section('content')
<div class="hero-area section">

  <!-- Backgound Image -->
  <div class="bg-image bg-parallax" style="background-image:url({{ asset('assets/img/services-bg.jpg')}})"></div>
  <!-- /Backgound Image -->

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <ul class="hero-area-tree">
          <li><a href="{{url(app()->getLocale() , '')}}">@lang('menu.home')</a></li>
            <li>@lang('menu.service')</li>
        </ul>
      </div>
    </div>
  </div>

</div>
<!-- Why us -->
<div id="why-us" class="section">
    <div class="bg-light py-5 service-1">
        <div class="container">
          <div class="row">
            <div class="section-header text-center">
              <h2>@lang('menu.service')</h2>
              <hr class="section-hr">
            </div>
          </div>
          <!-- Row  -->
          <div class="row">
            <!-- Column -->
            @foreach ($services as $service)
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="/storage/{{ $service->image_path}}"/>
                    <h3 class="font-weight-medium">{{ $service->name}}</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul>
                      {!! $service->desc !!}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- Column -->
          </div>
        </div>
      </div>
</div>
<!-- /Why us -->
@endsection