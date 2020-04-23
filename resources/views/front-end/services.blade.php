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
          <li>Hizmetler </li>
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
              <h2>HİZMETLER</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <!-- Row  -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
              <div class="card border-0 card-shadow mb-4">
                <div class="card-body text-center">
                  <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/008-businesswoman.png')}}"/></div>
                  <h3 class="font-weight-medium">Mali Müşavirlik</h3>
                  <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
              <div class="card border-0 card-shadow mb-4">
                <div class="card-body text-center">
                  <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/015-file.png')}}"/></div>
                  <h3 class="font-weight-medium">Vergi Danışmanlığı</h3>
                  <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
              <div class="card border-0 card-shadow mb-4">
                <div class="card-body text-center">
                  <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/024-employee.png')}}"/></div>
                  <h3 class="font-weight-medium">Firma Danışmanlığı</h3>
                  <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
                <div class="card border-0 card-shadow mb-4">
                  <div class="card-body text-center">
                    <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/033-calculator.png')}}"/></div>
                    <h3 class="font-weight-medium">Muhasebe</h3>
                    <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
                <div class="card border-0 card-shadow mb-4">
                  <div class="card-body text-center">
                    <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/014-people.png')}}"/></div>
                    <h3 class="font-weight-medium">Personel İşlemleri</h3>
                    <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
                <div class="card border-0 card-shadow mb-4">
                  <div class="card-body text-center">
                    <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/034-suitcase.png')}}"/></div>
                    <h3 class="font-weight-medium">Çeşitli Hizmetler</h3>
                    <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <!-- Column -->
            <div class="col-md-4 wrap-service1-box">
              <div class="card border-0 card-shadow mb-4">
                <div class="card-body text-center">
                  <div class="my-3"><img style="width:64px" src="{{ asset('assets/png/009-laptop.png')}}"/></div>
                  <h3 class="font-weight-medium">Sigorta</h3>
                  <p class="mt-3">You can relay on our amazing features list and also our customer services will be great experience.</p>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
        </div>
      </div>
</div>
<!-- /Why us -->
@endsection