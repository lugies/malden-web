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
            <li>Bağlantılar</li>
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
                <h2>BAĞLANTILAR</h2>
                <hr class="section-hr">
            </div>
        </div>
        <!-- /row -->

        <!-- courses -->
        <div id="courses-wrapper">

            <!-- row -->
            <div class="row">

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.gastrosocial.ch/de" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course01.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">Gastro Social</a>
                        
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.ahvluzern.ch/online-schalter/" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course02.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">AHV Luzern</a>
                        
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.aksz.ch/online-schalter/" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course03.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">AHV Schwyz</a>
                        
                    </div>
                </div>
                <!-- /single course -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.akzug.ch/online-schalter/" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course04.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">AHV Zug</a>
                        
                    </div>
                </div>
                <!-- /single course -->

            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.estv.admin.ch/estv/de/home/mehrwertsteuer.html" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course05.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">Eidg. Steuerverwaltung MWST</a>
                        
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://migration.lu.ch/formulare" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course06.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">Migrationsamt Luzern</a>
                        
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.sz.ch/behoerden/staatskanzlei-departemente/volkswirtschaftsdepartement/amt-fuer-migration.html/72-416-387-381-1968" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course07.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">Migrationsamt Schwyz</a>
                    </div>
                </div>
                <!-- /single course -->


                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a href="https://www.zg.ch/behoerden/sicherheitsdirektion/amt-fur-migration" target="_blank" class="course-img">
                            <img src="{{ asset('assets/img/course08.jpg')}}" alt="">
                            <i class="course-link-icon fa fa-link"></i>
                        </a>
                        <a class="course-title text-center" href="#">Migrationsamt Zug</a>
                        
                    </div>
                </div>
                <!-- /single course -->

            </div>
            <!-- /row -->

        </div>
        <!-- /courses -->
    </div>
    <!-- container -->
</div>
<!-- /Courses -->
@endsection