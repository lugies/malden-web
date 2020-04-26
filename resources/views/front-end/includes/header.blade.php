<!-- Header -->
<header id="header" class="transparent-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a class="logo" href="{{url('/')}}">
                            <img src="{{ asset('assets/img/logo-alt.png') }}" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->
        
                    <!-- Mobile toggle -->
                    <button class="navbar-toggle">
                        <span></span>
                    </button>
                    <!-- /Mobile toggle -->
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-4">
                <!-- Navigation -->
                <nav id="nav">
                    <ul class="main-menu nav navbar-nav navbar-right">
                        <li><a class="active" href="{{url('/')}}">Malden</a></li>
                        <li><a href="{{url('/services')}}">Hizmetler</a></li>
                        <li><a href="{{url('/about')}}">Hakkımızda</a></li>
                        <li><a href="{{url('/links')}}">Bağlantılar</a></li>
                        <li><a href="contact.html">İletişim</a></li>
                    </ul>
                </nav>
                <!-- /Navigation -->
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="language">
                    <a href=""><img class="flag" src="{{ asset('assets/png/switzerland.png') }}" alt="switzerland"></a>
                    <a href=""><img class="flag" src="{{ asset('assets/png/turkey.png') }}" alt="turkey"></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->