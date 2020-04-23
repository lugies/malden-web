<!-- Header -->
<header id="header" class="transparent-nav">
    <div class="container">

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

        <!-- Navigation -->
        <nav id="nav">
            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a class="active" href="{{url('/')}}">Malden</a></li>
                <li><a href="{{url('/services')}}">Hizmetler</a></li>
                <li><a href="#">Hakkımızda</a></li>
                <li><a href="{{url('/links')}}">Bağlantılar</a></li>
                <li><a href="contact.html">İletişim</a></li>
            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>
<!-- /Header -->