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
                    <h1 class="white-text">MALDEN</h1>
                    <p class="lead white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="main-button icon-button" href="{{url('/')}}">İletişime Geç</a>
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
                    <h2>MALDEN'e Hoşgeldiniz</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-book"></i>
                    <div class="feature-content">
                        <h4>VİZYON</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus aliquam orci, eu placerat odio hendrerit ac.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>MİSYON</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus aliquam orci, eu placerat odio hendrerit ac.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-money"></i>
                    <div class="feature-content">
                        <h4>DEĞERLERİMİZ</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus aliquam orci, eu placerat odio hendrerit ac.</p>
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