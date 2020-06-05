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
                    <li><a href="#">Gizlilik Politikası</a></li>
                    <li><a href="#">KVKK</a></li>
                </ul>
            </div>
            <!-- /footer nav -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div id="bottom-footer" class="row">

            <!-- social -->
            <div class="col-md-4 col-md-push-8">
                <ul class="footer-social">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="xing"><i class="fa fa-xing"></i></a></li>
                </ul>
            </div>
            <!-- /social -->

            <!-- copyright -->
            <div class="col-md-8 col-md-pull-4">
                <div class="footer-copyright">
                    <span>&copy; 2020 MalDen Treuhand GmbH | <i class="fa fa-map-marker"></i> <a href="https://maps.google.com/maps?q=b%C3%B6sch%2069%2C%206331%20h%C3%BCnenberg&amp;t=k&amp;z=19&amp;ie=UTF8" target="_blank"> Bösch 69, 6331 Hünenberg</a> | <i class="fa fa-phone"></i> <a href="tel:041 553 70 70">041 553 70 70</a> | <i class="fa fa-phone"></i> <a href="tel:076 383 46 46">076 383 46 46</a></span>
                </div>
            </div>
            <!-- /copyright -->

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
