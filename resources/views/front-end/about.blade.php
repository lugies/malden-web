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
            <li><a href="index.html">Anasayfa</a></li>
            <li>Hakkımızda</li>
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
                <h2>HAKKIMIZDA</h2>
                <hr class="section-hr">
            </div>
        </div>
        <!-- /row -->
        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <h3>Malden Hakkında Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis nulla tincidunt venenatis mollis.</p>
                <p> Mauris malesuada condimentum sem, eu suscipit velit iaculis sit amet. Proin finibus, ante nec suscipit posuere, odio neque tincidunt est, sit amet tempor urna ipsum nec lorem. Nulla a orci quis ex consequat lacinia sit amet eget sem. Ut luctus sapien quis malesuada rhoncus. Nam tristique rhoncus turpis, quis iaculis nisi scelerisque ac. Nam tincidunt libero in metus feugiat sagittis. Maecenas porttitor ultricies libero, sed gravida nunc vestibulum ut. Aliquam luctus eu velit a fermentum. Integer bibendum eros nec efficitur elementum. Morbi eu laoreet metus. Cras pharetra nisl eu nibh pulvinar congue in non urna.</p>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <a class="about-video" href="#">
                    <img src="{{ asset('assets/img/about-video.jpg')}}" alt="">
                    <i class="play-icon fa fa-play"></i>
                </a>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why us -->
@endsection