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

    <!--====== OFFCANVAS MENU PART START ======-->

    <div class="binduz-er-news-off_canvars_overlay"></div>
    <div class="binduz-er-news-offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="binduz-er-news-offcanvas_menu_wrapper">
                        <div class="binduz-er-news-canvas_close">
                            <a href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="binduz-er-news-header-social">
                            <ul class="text-center">
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Skype</a></li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="binduz-er-news-offcanvas_main_menu">
                                <li class="binduz-er-news-menu-item-has-children binduz-er-news-active">
                                    <a href="#">Home</a>
                                    <ul class="binduz-er-news-sub-menu">
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
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="archived.html">Archived </a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="author.html">Author</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#"> Pages</a>
                                    <ul class="binduz-er-news-sub-menu">
                                        <li><a href="blog-details-1.html">Blog Details 1</a></li>
                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                    </ul>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="about-us.html"> About</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="contact.html"> Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="binduz-er-news-offcanvas_footer">
                           <div class="binduz-er-news-logo text-center mb-30 mt-30">
                               <a href="index.html">
                                   <img src="{{asset('site/images/logo.png')}}" alt="">
                               </a>
                           </div>
                            <p>I’m Michal Škvarenina, a multi-disciplinary designer currently working at Wild and as a freelance designer.</p>
                            <ul>
                                <li><i class="fas fa-phone"></i> +212 34 45 45 98</li>
                                <li><i class="fas fa-home"></i> Angle Bd Abdelmoumen & rue soumaya, Résidence</li>
                                <li><i class="fas fa-envelope"></i> hello@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->
    
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

    <!--====== BINDUZ NEWS SLIDER 2 PART START ======-->

    <section class="binduz-er-news-slider-2-area pt-50">
        <div class=" container-fluid p-0">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-news-slider-2-item">
                        <div class="binduz-er-news-viewed-most">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/news-slider-1.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                </div>
                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                            </div>
                        </div>
                        <div class="binduz-er-news-viewed-most">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/news-slider-2.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                </div>
                                <h4 class="binduz-er-title"><a href="#">Father John Misty Talks Pop Music at Pitchfork Fest in Paris</a></h4>
                            </div>
                        </div>
                        <div class="binduz-er-news-viewed-most">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/news-slider-3.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                </div>
                                <h4 class="binduz-er-title"><a href="#">Cover Pixies’ Classic ‘Where Is My Mind’: Exclusive</a></h4>
                            </div>
                        </div>
                        <div class="binduz-er-news-viewed-most">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/news-slider-5.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                </div>
                                <h4 class="binduz-er-title"><a href="#">Illinois House Democrats wrangle over Madigan’s future</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ NEWS SLIDER 2 PART ENDS ======-->


    <!--====== ADD  PART START ======-->

    <div class="binduz-er-footer-add pb-60 pt-25">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-footer-add-item text-center">
                        <span class="binduz-er-mb-10 d-inline-block">ADVERTISEMENT</span>
                        <img src="{{asset('site/images/space-bg-4.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== ADD  PART ENDS ======-->

    <!--====== BINDUZ EDITORS PACK WHITE PART START ======-->

    <section class="binduz-er-editors-pack-white-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-editors-pack-title">
                        <h4 class="binduz-er-title">Editors Pack</h4>
                    </div>
                </div>
            </div>
            <div class="row g-0 align-items-center">
                <div class=" col-lg-9">
                    <div class="binduz-er-editors-pack-thumb">
                        <img src="{{asset('site/images/editors-pack-thumb.jpg')}}" alt="">
                    </div>
                </div>
                <div class=" col-lg-3">
                    <div class="binduz-er-editors-pack-content">
                        <div class="binduz-er-meta-item">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <div class="binduz-er-meta-date">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                            </div>
                        </div>
                        <h4 class="binduz-er-title"><a href="#">Father john misty talks pop music at pitchfork fest.</a></h4>
                        <div class="binduz-er-meta-author">
                            <div class="binduz-er-author">
                                <img src="{{asset('site/images/user-2.png')}}" alt="">
                                <span>By <span>Rosalina D.</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="binduz-er-editors-pack-item mt-60">
                <div class="row g-0">
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-1')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">How we’re helping get vaccines to more people</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-2')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">El productor Peter CottonTale captura el 2020 en</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-3')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">Producer Peter CottonTale captures 2020 in a song</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-4')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">We pack in here just the things to start a News</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ EDITORS PACK WHITE PART ENDS ======-->

    <!--====== BINDUZ FEATURED PART START ======-->

    <section class="binduz-er-featured-2-area pt-30 pb-60">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-4">
                    <div class="binduz-er-featured-title">
                        <h4 class="binduz-er-title">Sports</h4>
                    </div>
                    <div class="binduz-er-featured-slider-2">
                        <div class="binduz-er-featured-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/featured-item-1.jpg')}}" alt="">
                                <div class="binduz-er-icon">
                                   <a href="#test-popup-1" class="binduz-er-newsr-popup-audio"><i class="fal fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title"><a href="#">El productor Peter CottonTale captura el 2020 en una canción</a></h4>
                                <ul>
                                    <li><i class="fas fa-play"></i> The tourists who believe travel restrictions don't apply to</li>
                                    <li><i class="fas fa-play"></i> Can antimicrobial fashion protect you from the main with coronavirus? Earlier this month, Polygiene</li>
                                    <li><i class="fas fa-play"></i> Earlier this month, Polygiene, which recently partnered </li>
                                </ul>
                                <div id="test-popup-1" class="binduz-er-newsr-white-popup  mfp-hide">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/5bxFSOA5JYo"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-featured-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/featured-item-2.jpg')}}" alt="">
                                <div class="binduz-er-icon">
                                   <a href="#test-popup-2" class="binduz-er-newsr-popup-audio"><i class="fal fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title"><a href="#">A Google designer takes us inside Search’s mobile redesign</a></h4>
                                <ul>
                                    <li><i class="fas fa-play"></i> The tourists who believe travel restrictions don't apply to</li>
                                    <li><i class="fas fa-play"></i> Can antimicrobial fashion protect you from the main with coronavirus? Earlier this month, Polygiene</li>
                                    <li><i class="fas fa-play"></i> Earlier this month, Polygiene, which recently partnered </li>
                                </ul>
                                <div id="test-popup-2" class="binduz-er-newsr-white-popup  mfp-hide">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/5bxFSOA5JYo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-featured-title">
                        <h4 class="binduz-er-title">Events</h4>
                    </div>
                    <div class="binduz-er-featured-slider-2">
                        <div class="binduz-er-featured-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/featured-item-2.jpg')}}" alt="">
                                <div class="binduz-er-icon">
                                   <a href="#test-popup-3" class="binduz-er-newsr-popup-audio"><i class="fal fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title"><a href="#">How location helps provide more relevant search results</a></h4>
                                <ul>
                                    <li><i class="fas fa-microphone"></i> The tourists who believe travel restrictions don't apply to</li>
                                    <li><i class="fas fa-microphone"></i> Can antimicrobial fashion protect you from the main with coronavirus? Earlier this month, Polygiene</li>
                                    <li><i class="fas fa-microphone"></i> Earlier this month, Polygiene, which recently partnered </li>
                                </ul>
                                <div id="test-popup-3" class="binduz-er-newsr-white-popup  mfp-hide">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/5bxFSOA5JYo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-featured-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/featured-item-3.jpg')}}" alt="">
                                <div class="binduz-er-icon">
                                   <a href="#test-popup-4" class="binduz-er-newsr-popup-audio"><i class="fal fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title"><a href="#">How you'll find accurate and timely information on COVID-19</a></h4>
                                <ul>
                                    <li><i class="fas fa-microphone"></i> The tourists who believe travel restrictions don't apply to</li>
                                    <li><i class="fas fa-microphone"></i> Can antimicrobial fashion protect you from the main with coronavirus? Earlier this month, Polygiene</li>
                                    <li><i class="fas fa-microphone"></i> Earlier this month, Polygiene, which recently partnered </li>
                                </ul>
                                <div id="test-popup-4" class="binduz-er-newsr-white-popup  mfp-hide">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/5bxFSOA5JYo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-featured-title">
                        <h4 class="binduz-er-title">Technology</h4>
                    </div>
                    <div class="binduz-er-featured-slider-2">
                        <div class="binduz-er-featured-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/featured-item-3.jpg')}}" alt="">
                                <div class="binduz-er-icon">
                                   <a href="#test-popup-5" class="binduz-er-newsr-popup-audio"><i class="fal fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title"><a href="#">Paying the penalty: Fear and loathing in the Premier League</a></h4>
                                <ul>
                                    <li><i class="fas fa-film"></i> The tourists who believe travel restrictions don't apply to</li>
                                    <li><i class="fas fa-film"></i> Can antimicrobial fashion protect you from the main with coronavirus? Earlier this month, Polygiene</li>
                                    <li><i class="fas fa-film"></i> Earlier this month, Polygiene, which recently partnered </li>
                                </ul>
                                <div id="test-popup-5" class="binduz-er-newsr-white-popup  mfp-hide">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/5bxFSOA5JYo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-featured-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/featured-item-1.jpg')}}" alt="">
                                <div class="binduz-er-icon">
                                   <a href="#test-popup-6" class="binduz-er-newsr-popup-audio"><i class="fal fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title"><a href="#">Sweet streams: 2020's top trending TV shows and movies</a></h4>
                                <ul>
                                    <li><i class="fas fa-film"></i> The tourists who believe travel restrictions don't apply to</li>
                                    <li><i class="fas fa-film"></i> Can antimicrobial fashion protect you from the main with coronavirus? Earlier this month, Polygiene</li>
                                    <li><i class="fas fa-film"></i> Earlier this month, Polygiene, which recently partnered </li>
                                </ul>
                                <div id="test-popup-6" class="binduz-er-newsr-white-popup  mfp-hide">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/5bxFSOA5JYo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ FEATURED PART ENDS ======-->

    <!--====== BINDUZ EDITORS PACK DARK PART START ======-->

    <section class="binduz-er-editors-pack-white-area binduz-er-editors-pack-dark-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-editors-pack-title d-flex justify-content-between align-items-center">
                        <h4 class="binduz-er-title">Editors Pack</h4>
                        <a href="#">View All</a>
                    </div>
                </div>
            </div>
            <div class="row g-0 align-items-center">
                <div class=" col-lg-9">
                    <div class="binduz-er-editors-pack-thumb">
                        <img src="{{asset('site/images/editors-pack-thumb-5')}}.jpg" alt="">
                    </div>
                </div>
                <div class=" col-lg-3">
                    <div class="binduz-er-editors-pack-content">
                        <div class="binduz-er-meta-item">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <div class="binduz-er-meta-date">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                            </div>
                        </div>
                        <h4 class="binduz-er-title"><a href="#">Organizing the world’s information: where does it all</a></h4>
                        <div class="binduz-er-meta-author">
                            <div class="binduz-er-author">
                                <img src="{{asset('site/images/user-2.png')}}" alt="">
                                <span>By <span>Rosalina D.</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="binduz-er-editors-pack-item mt-60">
                <div class="row g-0">
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-6')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">We pack in here just the things to start a News</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-7')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">Woolaroo: a new tool for exploring indigenous</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-8')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">Blast off into Entertainment Space on your Android</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6">
                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                            <div class="binduz-er-latest-news-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/editors-pack-thumb-9')}}.jpg" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a href="#">Celebrating Asian Pacific American art and cultures</a></h5>
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Rosalina D.</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ EDITORS PACK DARK PART ENDS ======-->

    <!--====== BINDUZ POPULER NEWS PART START ======-->

    <section class="binduz-er-popular-news-area pt-60 pb-25">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-9">
                    <div class="binduz-er-popular-news-title">
                        <h4 class="binduz-er-title">Popular News</h4>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Popular</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-2-tab" data-bs-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Trending</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-3-tab" data-bs-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Hot News</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-4-tab" data-bs-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Recent</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                            <div class="binduz-er-popular-news-items">
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-1.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Honoring Asian Pacific American Heritage</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-2.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">From overcoming burnout to finding new opportunities</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-3.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Championing women’s sports with the WNBA and ESPN</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-4.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Hear educators' stories this Teacher Appreciation</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-5.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A dietitian’s website and blog stir up more business</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-6.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <div class="binduz-er-popular-news-items">
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-1.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Honoring Asian Pacific American Heritage</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-2.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">From overcoming burnout to finding new opportunities</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-3.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Championing women’s sports with the WNBA and ESPN</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-4.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Hear educators' stories this Teacher Appreciation</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-5.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A dietitian’s website and blog stir up more business</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-6.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                            <div class="binduz-er-popular-news-items">
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-1.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Honoring Asian Pacific American Heritage</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-2.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">From overcoming burnout to finding new opportunities</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-3.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Championing women’s sports with the WNBA and ESPN</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-4.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Hear educators' stories this Teacher Appreciation</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-5.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A dietitian’s website and blog stir up more business</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-6.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                            <div class="binduz-er-popular-news-items">
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-1.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Honoring Asian Pacific American Heritage</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-2.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">From overcoming burnout to finding new opportunities</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-3.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Championing women’s sports with the WNBA and ESPN</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-4.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Hear educators' stories this Teacher Appreciation</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-5.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A dietitian’s website and blog stir up more business</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <div class="binduz-er-video-post recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{asset('site/images/populer-news-6.jpg')}}" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="binduz-er-footer-add pt-25">
                        <div class="binduz-er-footer-add-item text-center">
                            <span class="mb-10 d-inline-block">ADVERTISEMENT</span>
                            <img src="{{asset('site/images/space-bg-4.jpg')}}" alt="">
                        </div>
                    </div>


                    <div class="binduz-er-editors-pack-item mt-60">
                        <div class="row g-0">
                            <div class=" col-lg-4 col-md-6">
                                <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                    <div class="binduz-er-latest-news-item">
                                        <div class="binduz-er-thumb">
                                            <img src="{{asset('site/images/editors-pack-thumb-1')}}0.jpg" alt="">
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="#">Technology</a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                </div>
                                            </div>
                                            <h5 class="binduz-er-title"><a href="#">Android Enterprise security delivers for flexible</a></h5>
                                            <div class="binduz-er-meta-author">
                                                <span>By <span>Rosalina D.</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6">
                                <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                    <div class="binduz-er-latest-news-item">
                                        <div class="binduz-er-thumb">
                                            <img src="{{asset('site/images/editors-pack-thumb-1')}}1.jpg" alt="">
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="#">Technology</a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                </div>
                                            </div>
                                            <h5 class="binduz-er-title"><a href="#">Finding the intersection of social justice and tech</a></h5>
                                            <div class="binduz-er-meta-author">
                                                <span>By <span>Rosalina D.</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 d-block d-none d-lg-block">
                                <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                    <div class="binduz-er-latest-news-item">
                                        <div class="binduz-er-thumb">
                                            <img src="{{asset('site/images/editors-pack-thumb-1')}}2.jpg" alt="">
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="#">Technology</a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                                </div>
                                            </div>
                                            <h5 class="binduz-er-title"><a href="#">Five ways we’re making Google the safer way to search</a></h5>
                                            <div class="binduz-er-meta-author">
                                                <span>By <span>Rosalina D.</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3">
                    <div class="binduz-er-populer-news-sidebar">
                        <div class="binduz-er-populer-news-social">
                            <div class="binduz-er-popular-news-title">
                                <h3 class="binduz-er-title">Social Connects</h3>
                            </div>
                            <div class="binduz-er-social-list">
                                <div class="binduz-er-list">
                                    <a href="#">
                                        <span><i class="fab fa-facebook-f"></i> <span>15000</span> Likes</span>
                                        <span>Like</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-twitter"></i> <span>15000</span> Likes</span>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-behance"></i> <span>5k+</span> Follower</span>
                                        <span>Follow</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-youtube"></i> <span>15000</span> Subscribe</span>
                                        <span>Subscribe</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-populer-news-sidebar-post pt-30">
                            <div class="binduz-er-popular-news-title">
                                <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Most Popular</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Most Recent</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent-2">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-1.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">New ways to save, commute and manage</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-2.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Finding the intersection of social justice and</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-3.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Bringing digital skills to previously incarcerated</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-4.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-1.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-2.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-3.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('site/images/latest-post-4.jpg')}}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-populer-news-sidebar-faq mt-40">
                            <div class="binduz-er-top-news-faq">
                                <h4 class="binduz-er-title">House is democrats wrangle over madigan’s future.</h4>
                                <div class="binduz-er-meta-author">
                                    <span>By <span>Miranda H. Halim</span></span>
                                </div>
                                <div class="binduz-er-answare">
                                    <p>Get Ask Amy delivered to your inbox every morning</p>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-populer-news-sidebar-newsletter mt-40">
                            <div class="binduz-er-newsletter-box text-center">
                                <img src="{{asset('site/images/icon/icon-3.png')}}" alt="">
                                <h3 class="binduz-er-title">Get Every Newsletter</h3>
                                <p>We are not gonna make spamming</p>
                                <div class="binduz-er-input-box">
                                    <input type="text" placeholder="Enter your email">
                                    <button><i class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-sidebar-social binduz-er-populer-news-sidebar-add d-none d-lg-block">
                            <div class="binduz-er-sidebar-add mt-40">
                                <h3 class="binduz-er-title">Build your website & <span>grow your business</span></h3>
                                <a class="binduz-er-main-btn" href="#">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
