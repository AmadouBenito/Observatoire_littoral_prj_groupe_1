<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Binduz - News Magazine Html Template</title>

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

<<<<<<< HEAD
    @yield('menu-mobile')
    @yield('actualite')
=======
>>>>>>> de8468885a68782782f7f609de17f4e754253925
    <!--====== SEARCH PART START ======-->

    <div class="binduz-er-news-search-box">
        <div class="binduz-er-news-search-header">
            <div class=" container mt-60">
                <div class="row">
                    <div class=" col-6">
                        <img src="{{asset('site/images/logo-4.png')}}" alt=""> <!-- search title -->
                    </div>
                    <div class=" col-6">
                        <div class="binduz-er-news-search-close float-end">
                            <button class="binduz-er-news-search-close-btn">Close <span></span><span></span></button>
                        </div> <!-- search close -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search header -->
        <div class="binduz-er-news-search-body">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-news-search-form">
                            <form action="#">
                                <input type="text" placeholder="Search for Products">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search body -->
    </div>

    <!--====== SEARCH PART ENDS ======-->

    <!--====== BINDUZ HEADER PART START ======-->

    <header class="binduz-er-header-area binduz-er-header-area-3">
        <div class="binduz-er-header-nav">
            <div class=" container-fluid p-0">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-brand logo"><a href="index.html"><img src="{{asset('site/images/logo-5.png')}}" alt=""></a></div> <!-- logo -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="binduz-er-nav-link" href="index.html">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="archived.html">Presentation <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-1.html">historique</a></li>
                                                <li><a href="blog-details-2.html">mission</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="archived.html">Publication <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-1.html">rapport</a></li>
                                                <li><a href="blog-details-2.html">meteo</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Media<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-1.html">video</a></li>
                                                <li><a href="blog-details-2.html">image</a></li>
                                                <li><a href="blog-details-2.html">audio</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Projet<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-1.html">appel offre</a></li>
                                                <li><a href="blog-details-2.html">projet</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">A Propos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contactez-Nous</a>
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

    <!--====== BINDUZ HEADER PART ENDS ======-->

    @yield('contenu')

    <!--====== BINDUZ POPULER NEWS PART ENDS ======-->

    <!--====== BINDUZ FOOTER 3  PART START ======-->


    <div class="binduz-er-footer-copyright-area">
        <div class=" container">
            <div class="row align-items-center">
                <div class=" col-lg-4">
                    <div class="binduz-er-copyright-text">
                        <p>Copyright By@<span>QuomodoTheme</span> - 2021</p>
                    </div>
                </div>
                <div class=" col-lg-8">
                    <div class="binduz-er-copyright-menu float-lg-end float-none">
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Accessibility & CC</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Studio Tours</a></li>
                            <li><a href="#">Advertise with us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="binduz-er-footer-logo">
            <a href="#">
                <img src="{{asset('site/images/logo-5.png')}}" alt="">
            </a>
        </div>
    </div>

    <!--====== BINDUZ FOOTER 3  PART ENDS ======-->

    <!--====== BINDUZ BACK TO TOP PART START ======-->

    <div class="binduz-er-back-to-top">
        <p>BACK TO TOP <i class="fal fa-long-arrow-right"></i></p>
    </div>

    <!--====== BINDUZ BACK TO TOP PART ENDS ======-->






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
