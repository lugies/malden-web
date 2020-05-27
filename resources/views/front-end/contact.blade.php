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
  <div id="contact" class="section">

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>İLETİŞİM</h2>
                <hr class="section-hr">
            </div>
        </div>
        <!-- /row -->
        
        <!-- row -->
        <div class="row">

            <!-- contact information -->
					<div class="col-md-6">
                        <h4>İletişim Bilgileri</h4>
						<ul class="contact-details">
                            <li>
                                <i class="fa fa-envelope"></i><a href="mailto:info@malden.ch?subject=MalDen Treuhand GmbH için yeni mesaj">info@malden.ch</a>
                                <i class="fa fa-phone"></i><a href="tel:041 553 70 70">041 553 70 70</a>
                                <i class="fa fa-phone"></i><a href="tel:076 383 46 46">076 383 46 46</a>
                            </li>
                            <li><i class="fa fa-map-marker"></i>Merkez: Hauentalstrasse 171, 8200 Schaffhausen</li>
                            <li><i class="fa fa-map-marker"></i>Şube: Bösch 69, 6331 Hünenberg</li>
                        </ul>
                        <h4>Bizi Kolayca Bulabilirsiniz.</h4>
                        <p>Büromuz Rotkreuz otoban çıkışı, Cham istikametinde, Bösch endüstri bölgesindedir.</p>
                        <p>Binanın girişindeki tabelada kat bilgilerimiz bulunmaktadır.</p>
                        <p>Ücretsiz park yerleri binamızın ön ve arka tarafında bulunmaktadır.</p>
					</div>
					<!-- contact information -->

            <div class="col-md-6">
                <!-- contact map -->
					<div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d589.009240165422!2d8.439787!3d47.16180700000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900048d9b3a623%3A0xbc118ad068f6c655!2zQsO2c2NoIDY5LCA2MzMxIEjDvG5lbmJlcmcsIMSwc3Zpw6dyZQ!5e1!3m2!1str!2sus!4v1588242074648!5m2!1str!2sus" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
				<!-- /contact map -->
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why us -->
@endsection