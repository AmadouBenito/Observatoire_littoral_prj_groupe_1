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

    @yield('menu-mobile')
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
                                            <a class="nav-link" href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                                <li><a href="index-9.html">Home 9</a></li>
                                                <li><a href="index-10.html">Home 10</a></li>
                                                <li><a href="index-11.html">Home 11</a></li>
                                                <li><a href="index-12.html">Home 12</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="binduz-er-nav-link" href="archived.html">Archived </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="binduz-er-nav-link" href="author.html">Author</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Pages<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-1.html">Blog Details 1</a></li>
                                                <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <div class="binduz-er-navbar-btn d-flex">
                                    <div class="binduz-er-header-dropdown-select binduz-er-select-item d-none d-sm-block">
                                        <select id="cars">
                                            <option value="volvo" selected>Editions</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                    <div class="binduz-er-widget d-flex">
                                        <a class="binduz-er-news-search-open" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                    <span class="binduz-er-toggle-btn toggle-btn binduz-er-news-canvas_open d-block">
                                        <i class="fal fa-bars"></i>
                                    </span>
                                </div>
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

    <footer class="binduz-er-footer-3-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-2 col-md-4 col-sm-6">
                    <div class="binduz-er-footer-navigation-widget mt-30">
                        <div class="binduz-er-footer-title">
                            <h3 class="binduz-er-title">Tech</h3>
                        </div>
                        <div class="binduz-er-navigarion-list">
                            <ul>
                                <li><a href="#">Innovate</a></li>
                                <li><a href="#">Gadget</a></li>
                                <li><a href="#">Mission: Ahead</a></li>
                                <li><a href="#">Upstarts</a></li>
                                <li><a href="#">Work Transformed</a></li>
                                <li><a href="#">Innovative Cities</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-4 col-sm-6">
                    <div class="binduz-er-footer-navigation-widget mt-30">
                        <div class="binduz-er-footer-title">
                            <h3 class="binduz-er-title">Style</h3>
                        </div>
                        <div class="binduz-er-navigarion-list">
                            <ul>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Luxury</a></li>
                                <li><a href="#">Beauty</a></li>
                                <li><a href="#">Video</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-4 col-sm-6">
                    <div class="binduz-er-footer-navigation-widget mt-30">
                        <div class="binduz-er-footer-title">
                            <h3 class="binduz-er-title">Travel</h3>
                        </div>
                        <div class="binduz-er-navigarion-list">
                            <ul>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Food & Drink</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Stay</a></li>
                                <li><a href="#">Videos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-4 col-sm-6">
                    <div class="binduz-er-footer-navigation-widget mt-30">
                        <div class="binduz-er-footer-title">
                            <h3 class="binduz-er-title">Sports</h3>
                        </div>
                        <div class="binduz-er-navigarion-list">
                            <ul>
                                <li><a href="#">Pro Football</a></li>
                                <li><a href="#">College Football</a></li>
                                <li><a href="#">Basketball</a></li>
                                <li><a href="#">Baseball</a></li>
                                <li><a href="#">Soccer</a></li>
                                <li><a href="#">Olympics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-4 col-sm-6">
                    <div class="binduz-er-footer-navigation-widget mt-30">
                        <div class="binduz-er-footer-title">
                            <h3 class="binduz-er-title">Videos</h3>
                        </div>
                        <div class="binduz-er-navigarion-list">
                            <ul>
                                <li><a href="#">Live TV</a></li>
                                <li><a href="#">Digital Studios</a></li>
                                <li><a href="#">CNN Films</a></li>
                                <li><a href="#">HLN</a></li>
                                <li><a href="#">TV Schedule</a></li>
                                <li><a href="#">TV Shows A-Z</a></li>
                                <li><a href="#">OurVR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-4 col-sm-6">
                    <div class="binduz-er-footer-navigation-widget mt-30">
                        <div class="binduz-er-footer-title">
                            <h3 class="binduz-er-title">More</h3>
                        </div>
                        <div class="binduz-er-navigarion-list">
                            <ul>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Longform</a></li>
                                <li><a href="#">Investigations</a></li>
                                <li><a href="#">Profiles</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Newsletters</a></li>
                                <li><a href="#">Work for Binduzz</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
