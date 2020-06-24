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
            <li>@lang('menu.contact')</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="section">

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>@lang('menu.contact')</h2>
                <hr class="section-hr">
            </div>
        </div>
        <!-- /row -->
        
        <!-- row -->
        <div class="row">
          @foreach ($contacts as $contact)
              
            <!-- contact information -->
					<div class="col-md-6">
                        <h4>İletişim Bilgileri</h4>
						<ul class="contact-details">
                            <li>
                                <i class="fa fa-envelope"></i><a href="mailto:info@malden.ch?subject=MalDen Treuhand GmbH için yeni mesaj">{{$contact->mail}}</a>
                                <i class="fa fa-phone"></i><a href="tel:041 553 70 70">{{$contact->phone}}</a>
                                <i class="fa fa-phone"></i><a href="tel:076 383 46 46">{{$contact->phone_2}}</a>
                            </li>
                            <li><i class="fa fa-map-marker"></i>{{$contact->adress}}</li>
                            <li><i class="fa fa-map-marker"></i>{{$contact->adress2}}</li>
                        </ul>
                        <h4>@lang('index.contact_title')</h4>
                        <p>{!! $contact->info !!}</p>
					</div>
					<!-- contact information -->

            <div class="col-md-6">
                <!-- contact map -->
					<div class="map-responsive">
                        <iframe src="https://maps.google.com/maps?q={{$contact->latitude}},{{$contact->longitude}}&t=k&hl=tr&z=18&ie=UTF8&iwloc=&output=embed" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
				<!-- /contact map -->
            </div>
          @endforeach
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why us -->
@endsection