@extends('front-end.layouts.app')
@section('content')
<div class="hero-area section">
    <!-- Backgound Image -->
    <div class="bg-image bg-parallax" style="background-image:url({{ asset('assets/img/links-bg.jpg')}})"></div>
    <!-- /Backgound Image -->
  
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <ul class="hero-area-tree">
            <li><a href="{{url(app()->getLocale() , '')}}">@lang('menu.home')</a></li>
            <li>@lang('menu.links')</li>
          </ul>
        </div>
      </div>
    </div>
  
  </div>
<!-- Courses -->
<div id="courses" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>@lang('menu.links')</h2>
                <hr class="section-hr">
            </div>
        </div>
        <!-- /row -->

        <!-- courses -->
        <div id="courses-wrapper">

            <!-- row -->
            <div class="row">
            @foreach ($links as $link)
                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="{{$link->url}}" target="_blank" class="course-img">
                            <img src="/storage/{{$link->image_path}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <!-- /single course -->
            @endforeach
            </div>
            <!-- /row -->

        </div>
        <!-- /courses -->
    </div>
    <!-- container -->
</div>
<!-- /Courses -->
@endsection