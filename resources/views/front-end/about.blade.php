@extends('front-end.layouts.app')
@section('content')
<div class="hero-area section">
    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ asset('assets/img/page-background.jpg')}})"></div>
    <!-- /Backgound Image -->
  
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <ul class="hero-area-tree">
            <li><a href="index.html">@lang('menu.home')</a></li>
            <li>@lang('menu.about')</li>
          </ul>
        </div>
      </div>
    </div>
  
  </div>
<!-- Why us -->
<div id="why-us" class="section">

    <!-- container -->
    <div class="container">
      <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>@lang('menu.about')</h2>
                <hr class="section-hr">
            </div>
        </div>
        <!-- /row -->
        <!-- row -->
        <div class="row">

            <div class="col-md-6">
              {!! $data->desc !!}
            </div>

            <div class="col-md-5 col-md-offset-1">
              <div class="about-img">
                <img src="/storage/{{$data->image_path}}" alt="">
              </div>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why us -->
@endsection