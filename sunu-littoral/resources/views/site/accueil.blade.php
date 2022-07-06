@extends('site.layouts.app')

@section('actualite')

<section>

    <div class="hero-slide-active">
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover">
                <img src="{{asset('site/images/littoral/annotation_2020-06-15_195500.png')}} " alt="" style="width: 1920px ; heig">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Sunu Littoral</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2022</span>
                                </div>
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Le littoral Senegal 1</a></h3>
                            </div>
                            <div class="binduz-er-meta-author">
                                <div class="binduz-er-author">

                                </div>
                                <div class="binduz-er-meta-list">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover item-2">
                <img src="{{asset('site/images/littoral/ac7291606dd3a21aecfc5ace494f51-5e6fb.jpg')}} " alt="" style="width: 1920px ; heig">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Technology</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                </div>
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Le littoral Senegal 2 </a></h3>
                            </div>
                            <div class="binduz-er-meta-author">
                                <div class="binduz-er-author">
                                    <img src="{{asset('site/images/user-1.png')}}" alt="">
                                    <span>By <span>Ndoye</span></span>
                                </div>
                                <div class="binduz-er-meta-list">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="binduz-er-hero-weather d-flex justify-content-end">
                            <div class="binduz-er-weather-item">
                                <img src="{{asset('site/images/icon/icon-1.png')}}" alt="">
                                <h5 class="binduz-er-title"></h5>
                                <span>32°C</span>
                            </div>
                            <div class="binduz-er-weather-item">
                                <img src="{{asset('site/images/icon/icon-2.png')}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover item-3">
                <img src="{{asset('site/images/littoral/de0b1a6ce9c564bee3676b58939fa0-5b754.jpg')}} " alt="" style="width: 1920px ; heig">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Technology</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                </div>
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Le littoral Senegal 3</a></h3>
                            </div>
                            <div class="binduz-er-meta-author">
                                <div class="binduz-er-author">
                                    <img src="{{asset('site/images/user-1.png')}}" alt="">
                                    <span> <span></span></span>
                                </div>
                                <div class="binduz-er-meta-list">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="binduz-er-hero-weather d-flex justify-content-end">
                            <div class="binduz-er-weather-item">
                                <img src="{{asset('site/images/icon/icon-1.png')}}" alt="">
                                <h5 class="binduz-er-title"></h5>
                                <span>32°C</span>
                            </div>
                            <div class="binduz-er-weather-item">
                                <img src="{{asset('site/images/icon/icon-2.png')}}" alt="">
                                <h5 class="binduz-er-title">New York </h5>
                                <span>32°C</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-portal-area">
        <div class="binduz-er-hero-news-portal hero-portal-active">
            @foreach ($actualites as $actualite)
            <div class="binduz-er-news-portal-item">
                <div class="binduz-er-thumb">
                    <a href="#"><img src="{{asset('storage')}}/{{$actualite->image}}" alt="" style="width: 120px ; height: 120"></a>
                </div>
                <div class="binduz-er-content">
                    <div class="binduz-er-post-meta-date">
                        <span><i class="fal fa-calendar-alt"></i> {{$actualite->date}}"</span>
                    </div>
                    <h4 class="binduz-er-title"><a href="#">{{$actualite->titre}} <br> </a></h4>
                    <h6>{{$actualite->video}}</h6>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<section class="binduz-er-main-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="binduz-er-video-post-topbar">
                    <div class="binduz-er-video-post-title">
                        <h3 class="binduz-er-title">Trending news</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($actualites as $actualite)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="binduz-er-main-posts-item">

                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('storage')}}/{{$actualite->image}}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="">{{$actualite->titre}}</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> {{$actualite->date}}</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        {{-- <h4 class="binduz-er-title"><a href="#">{{}}</a></h4> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="binduz-er-add pt-10">
                    <img src="{{asset('site/images/space-thumb.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="binduz-er-sidebar-about">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">About Me</h4>
                    </div>
                    <div class="binduz-er-sidebar-about-item">
                        <div class="binduz-er-sidebar-about-user d-flex">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/littoral/dechets.jpg')}} " style="width: 100px; height: 80px ;">
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title">Informations</h4>
                                <span>Ministere de l'interieur</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="binduz-er-text">
                            <p> une étude, dont une copie nous est parvenue, montre que toutes les villes côtières de la sous-région risquent de disparaître d’ici l’an 2100,
                                si rien n’est fait, du fait de plusieurs facteurs dont l’érosion côtière, la pression démographique et l’activité socio-économique sur le littoral,
                                l’avancée de la mer et la changement climatique.</p>
                            <a class="binduz-er-main-btn" href="https://www.google.fr/url?sa=i&url=http%3A%2F%2Fsenemag.free.fr%2Fspip.php%3Farticle915&psig=AOvVaw1UyNf8M2WUmZ1SRBsQvyXl&ust=1657047023307000&source=images&cd=vfe&ved=0CAkQjRxqFwoTCLCq-K7z3_gCFQAAAAAdAAAAABAz">Plus d'Information <u>Ici</u></a>
                        </div>
                    </div>
                </div>
                <div class="binduz-er-sidebar-latest-post">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">Les Appels d'offres</h4>
                    </div>
                    <div class="binduz-er-sidebar-latest-post-box">
                        @foreach ($appelDoffres as $appelDoffre)

                        <div class="binduz-er-sidebar-latest-post-item">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/littoral/PDF_24287 (1).png')}}" alt="latest" style="width: 25px ; height: 25px ;">
                            </div>
                            <div class="binduz-er-content">
                                <span><i class="fal fa-calendar-alt"></i> 'expire' {{$appelDoffre->dateFin}}</span>
                                <h4 class="binduz-er-title"><a href="{{('storage')}}/{{$appelDoffre->fichier}}">{{$appelDoffre->fichier}}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="binduz-er-sidebar-add-box mt-40">

                    <div class="binduz-er-logo">
                        <a href="#"><img src="" alt=""></a>
                    </div>
                    <p></p>
                    <a class="binduz-er-main-btn" href="#">Purchase Now</a>

                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="binduz-er-video-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="binduz-er-video-post-topbar">
                    <div class="binduz-er-video-post-title">
                        <h3 class="binduz-er-title">Actualites Video Post</h3>
                    </div>
                </div>
            </div>
            <div class="  col-lg-4">
                <div class="binduz-er-video-post-tab">
                    <ul class="nav nav-pills justify-content-lg-end justify-content-start" id="pills-tab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-21-tab" data-bs-toggle="pill" href="#pills-21" role="tab" aria-controls="pills-21" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-22-tab" data-bs-toggle="pill" href="#pills-22" role="tab" aria-controls="pills-22" aria-selected="false">Travel</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-23-tab" data-bs-toggle="pill" href="#pills-23" role="tab" aria-controls="pills-23" aria-selected="false">Fashion</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-24-tab" data-bs-toggle="pill" href="#pills-24" role="tab" aria-controls="pills-24" aria-selected="false">Health</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-25-tab" data-bs-toggle="pill" href="#pills-25" role="tab" aria-controls="pills-25" aria-selected="false">Nature</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent-2">
            <div class="tab-pane fade show active" id="pills-21" role="tabpanel" aria-labelledby="pills-21-tab">
                <div class=" row">
                    <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                        <div class="binduz-er-video-post-item">
                            @foreach ($fichiers as $fichier)
                                    @includeIf($fichier->type_fichier_id == 'mp4')
                                    {
                                        <div class="binduz-er-trending-news-list-box">
                                            <div class="binduz-er-thumb">
                                                <img src="{{asset('storage')}}/{{$fichier->video}}" alt="">
                                                <div class="binduz-er-play">
                                                    <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="binduz-er-content">
                                                <div class="binduz-er-meta-item">
                                                    <div class="binduz-er-meta-categories">
                                                        <a href="#">{{$fichier->titre}}</a>
                                                    </div>
                                                    <div class="binduz-er-meta-date">
                                                        <span><i class="fal fa-calendar-alt"></i> {{$fichier->date}}</span>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-title">
                                                    <h4 class="binduz-er-title"><a href="#">{{$fichier->domaine}}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    }
                            @endforeach

                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-3.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Android Enterprise security delivers for flexible work</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="  col-lg-6 order-lg-2 order-3">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box main-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-2.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Escucha las historias de los educadores en esta Semana de Apreciación del Profesor</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-4.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">This new emoji has been years in the making</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-5.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-22" role="tabpanel" aria-labelledby="pills-22-tab">
                <div class=" row">
                    <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-1.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">A Matter of Impact: April updates from Google.org</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-3.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Android Enterprise security delivers for flexible work</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-6 order-lg-2 order-3">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box main-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-2.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Escucha las historias de los educadores en esta Semana de Apreciación del Profesor</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-4.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">This new emoji has been years in the making</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-5.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-23" role="tabpanel" aria-labelledby="pills-23-tab">
                <div class=" row">
                    <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-1.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">A Matter of Impact: April updates from Google.org</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-3.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Android Enterprise security delivers for flexible work</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-6 order-lg-2 order-3">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box main-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-2.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Escucha las historias de los educadores en esta Semana de Apreciación del Profesor</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-4.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">This new emoji has been years in the making</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-5.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-24" role="tabpanel" aria-labelledby="pills-24-tab">
                <div class=" row">
                    <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-1.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">A Matter of Impact: April updates from Google.org</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-3.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Android Enterprise security delivers for flexible work</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-6 order-lg-2 order-3">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box main-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-2.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Escucha las historias de los educadores en esta Semana de Apreciación del Profesor</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-4.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">This new emoji has been years in the making</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-5.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-25" role="tabpanel" aria-labelledby="pills-25-tab">
                <div class=" row">
                    <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-1.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">A Matter of Impact: April updates from Google.org</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-3.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Android Enterprise security delivers for flexible work</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-6 order-lg-2 order-3">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box main-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-2.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Escucha las historias de los educadores en esta Semana de Apreciación del Profesor</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-4.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">This new emoji has been years in the making</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/video-post-thumb-5.png')}}" alt="">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i> 14th February 2020</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">New resources on the gender gap in computer science </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<br>

@endsection
