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
              <hr class="section-hr">
            </div>
          </div>
          <!-- Row  -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/015-file.png')}}"/>
                    <h3 class="font-weight-medium">Vergi Danışmanlığı</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Varlık yönetimi ve danışmanlığı</li>
                      <li>Muhasebe</li>
                      <li>Denetleme</li>
                      <li>Faturalama</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/015-file.png')}}"/>
                    <h3 class="font-weight-medium">Mali Müşavirlik</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Özel ve tüzel kişiler için vergi danışmanlığı</li>
                      <li>Vergi bildirim formu doldurulması</li>
                      <li>Firma kapanışları ile ilgili vergi bildirimi</li>
                      <li>Firma kurulumu ya da dönüştürülmesi ile ilgili vergi bildirimi</li>
                      <li>Firmanın konumuna bağlı vergi danışmanlığı ve vergi karşılaştırması</li>
                      <li>Vergi faturalarının kontrolü</li>
                      <li>Vergi makamları ile iletişim</li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/024-employee.png')}}"/>
                    <h3 class="font-weight-medium">Firma Danışmanlığı</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Firma modellemesi</li>
                      <li>Kar / zarar hesabı</li>
                      <li>Finans analizi</li>
                      <li>Finanz ve yatırım danışmanlığı</li>
                      <li>Şirket kurulumu, dönüştürülmesi, birleşimi</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/033-calculator.png')}}"/>
                    <h3 class="font-weight-medium">Muhasebe</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Finanz ve bordro hesapları ve yıllık kapanışlar</li>
                      <li>Kapanış denetimi ve danışmanlığı</li>
                      <li>Yıllık kapanışların değerlendirilmesi</li>
                      <li>Vergi, emeklilik ve kaza sigortası, sosyal sigortalar kurumu hesaplamaları</li>
                      <li>Bütçelendirme</li>
                      <li>Fizibilite çalışması, İstatistik, Muhasebe danışmanlığı</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/014-people.png')}}"/>
                      <h3 class="font-weight-medium">Personel İşlemleri</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Emeklilik kasası, kaza sigortası bildirimleri</li>
                      <li>Bordro</li>
                      <li>Yıllık gelir hesabı</li>
                      <li>Sosyal sigortalar kurumu işlemleri</li>
                      <li>Çalışanlar için danışmanlık</li>
                      <li>Stopaj vergi hesabı</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/034-suitcase.png')}}"/>
                      <h3 class="font-weight-medium">Çeşitli Hizmetler</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Almanca / Türkçe çevirmenlik</li>
                      <li>İş yazışmaları</li>
                      <li>İkametgah adres gösterimi</li>
                      <li>Ofis ve posta hizmetleri</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img style="width:64px" src="{{ asset('assets/png/009-laptop.png')}}"/>
                      <h3 class="font-weight-medium">Sigorta</h3>
                  </div>
                  <div class="flip-card-back">
                    <ul class="text">
                      <li>Özel ve tüzel kişiler</li>
                      <li>Hasar danışmanlığı</li>
                      <li>Her alanda vergi danışmanlığı</li>
                      <li>Emeklilik kasası danışmanlığı</li>
                    </ul>
                  </div>
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