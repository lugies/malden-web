<!-- Footer -->
<footer id="footer" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- footer logo -->
            <div class="col-md-6">
                <div class="footer-logo">
                    <a class="logo" href="index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <!-- footer logo -->

            <!-- footer nav -->
            <div class="col-md-6">
                <ul class="footer-nav">
                    <li><a href="{{url(app()->getLocale() , 'privacy')}}">@lang('menu.privacy_policy')</a></li>
                </ul>
            </div>
            <!-- /footer nav -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div id="bottom-footer" class="row">
            
            <!-- copyright -->
            <div class="col-md-10">
                <div class="footer-copyright">
                    <span>&copy; {{date('Y')}} MalDen Treuhand GmbH | <i class="fa fa-map-marker"></i> <a href="https://maps.google.com/maps?q=b%C3%B6sch%2069%2C%206331%20h%C3%BCnenberg&amp;t=k&amp;z=19&amp;ie=UTF8" target="_blank"> Bösch 69, 6331 Hünenberg</a> | <i class="fa fa-mail"></i> <a href="mailto:info@malden.ch?subject=MalDen Treuhand GmbH için yeni mesaj">info@malden.ch </a> | <i class="fa fa-phone"></i> <a href="tel:041 553 70 70">041 553 70 70</a> | <i class="fa fa-phone"></i> <a href="tel:076 383 46 46">076 383 46 46</a></span>
                </div>
            </div>
            <!-- /copyright -->

            <!-- social -->
            <div class="col-md-2">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/MalDen-Treuhand-GmbH-2014234248872457"  target="_blank" class="facebook" ><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="xing"><i class="fa fa-xing"></i></a></li>
                </ul>
            </div>
            <!-- /social -->

        </div>
        <!-- row -->

    </div>
    <!-- /container -->

</footer>
<!-- /Footer -->

<!-- preloader -->
<div id='preloader'><div class='preloader'></div></div>
<!-- /preloader -->


<!-- jQuery Plugins -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
@yield('js')
</body>
</html>
