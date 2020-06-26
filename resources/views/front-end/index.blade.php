@extends('front-end.layouts.app')
@section('content')
<!-- Home -->
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ asset('assets/img/home-background.jpg')}})"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white-text">@lang('index.welcome')</h1>
                    <a class="main-button icon-button" href="{{url(app()->getLocale() , 'contact')}}">@lang('index.contact_us')</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md 12 text-center">
                    <a class="scroll-button" href="#about"><img src="{{ asset('assets/png/down-arrow.png')}}"></a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Home -->
<!-- About -->
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <div class="section-header">
                    <h2>@lang('index.welcome_malden')</h2>
                </div>

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-book"></i>
                    <div class="feature-content">
                        <h4>@lang('index.vizyon')</h4>
                        <p>@lang('index.vizyon_text')</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>@lang('index.misyon')</h4>
                        <ul>@lang('index.misyon_text')</ul>
                    </div>
                </div>
                <!-- /feature -->
            </div>

            <div class="col-md-6">
                <div class="about-img">
                    <img src="{{ asset('assets/img/about.jpg')}}" alt="">
                </div>
            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->
</div>
<!-- /About -->
@endsection