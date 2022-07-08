<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Sunu-littoral \ L'Observatoire nationale du littoral nationnal</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('site/css/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/nice-select.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/slick.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">


</head>

<body>

    <!--====== SUNU-LITTORAL TOP HEADER  ======-->

    <div class="binduz-er-top-header-area">
        <div class="binduz-er-bg-cover"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-headline">
                        <p><span><i class="fas fa-bolt"></i> Sunu-littoral:</span> <a href="#">Kaarange littoral bi, sama yitte</a></p>
                        <p><span><i class="fas fa-bolt"></i> Sunu-littoral:</span> <a href="#">Kaarange littoral bi, sama yitte</a></p>
                        <p><span><i class="fas fa-bolt"></i> Sunu-littoral:</span> <a href="#">Kaarange littoral bi, sama yitte</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-social d-flex justify-content-end align-items-center">
                        <div id="s_inscrire" class="binduz-er-news-subscribe-btn">
                            <a class="binduz-er-main-btn" href="{{route("register")}}">S'inscrire</a>
                        </div>
                        <div class="binduz-er-news-subscribe-btn">
                            <a class="binduz-er-main-btn" href="{{url('/admin/login')}}">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== SUNU-LITTORAL TOP HEADER PART ENDS ======-->

    <!--====== SUNU-LITTORAL HEADER  ======-->

    <header class="binduz-er-header-area">
        <div class="binduz-er-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-brand logo"><a href="#html"><img src="{{asset('/images/logo.png')}}" alt=""></a></div> <!-- logo -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('accueil')}}">Accueil </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('presentation')}}">Présentation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#html">Publication <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Rapports</a></li>
                                                <li><a href="{{ route('accueil.appelOffre') }}">Appel d'offre</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#html">Média <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('accueil.video') }}">Vidéo</a></li>
                                                <li><a href="{{ route('accueil.image') }}">Image</a></li>
                                                <li><a href="{{ route('accueil.audio') }}">Audio</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('accueil.projet') }}">Projets </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#accueil">A propos </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#accueil">Contacts</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>

    <!--====== SUNU-LITTORAL HEADER PART ENDS ======-->

    @yield('contenu')
    @yield('actualite')
    @yield('mes_images')
    @yield('mes_videos')
    @yield('mes_audios')
    @yield('presentation')

    @yield('projet')
    @yield('appelOffre')

    <!--====== SUNU-LITTORAL POPULER NEWS PART ENDS ======-->

    @yield('besoin')

        <!--====== SUNU-LITTORAL FOOTER  ======-->

        <div class="binduz-er-footer-copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="binduz-er-copyright-text">
                            <p>Copyright By@<span>QuomodoTheme</span> - 2021</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="binduz-er-copyright-menu float-lg-end float-none">
                            <ul>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Claim A Report</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== SUNU-LITTORAL FOOTER PART ENDS ======-->

        <!--====== SUNU-LITTORAL BACK TO TOP  ======-->

        <div class="binduz-er-back-to-top">
            <p>REMONTER <i class="fal fa-long-arrow-right"></i></p>
        </div>

        <!--====== SUNU-LITTORAL BACK TO TOP PART ENDS ======-->






    <!--====== jquery js ======-->
    <script src="{{asset('site/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('site/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('site/js/popper.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('site/js/slick.min.js')}}"></script>

    <!--====== nice select js ======-->
    <script src="{{asset('site/js/jquery.nice-select.min.js')}}"></script>

    <!--====== Isotope js ======-->
    <script src="{{asset('site/js/isotope.pkgd.min.js')}}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{asset('site/js/imagesloaded.pkgd.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('site/js/main.js')}}"></script>

</body>

</html>
