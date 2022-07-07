@extends('site.layouts.app')

@section('actualite')

<section>
    <div class="hero-slide-active">
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover">
                <img src="{{asset('site/images/slide/Slide 1.png')}} " alt="" style="width: 1920px ;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Sunu Littoral</a>
                                </div>
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Sunu littoral, l'Observatoire du littoral</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover item-2">
                <img src="{{asset('site/images/slide/Slide 2.png')}} " alt="" style="width: 1920px ;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Sunu littoral</a>
                                </div>
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Ayez acces à toutes les données du littoral </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover item-3">
                <img src="{{asset('site/images/slide/Slide 3.png')}} " alt="" style="width: 1920px ;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Sunu-littoral</a>
                                </div>
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Proposer vos projets sur le littoral </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="binduz-er-hero-area d-flex align-items-center">
            <div class="binduz-er-bg-cover item-3">
                <img src="{{asset('site/images/slide/Slide 4.png')}} " alt="" style="width: 1920px ;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="binduz-er-hero-news-content">
                            <div class="binduz-er-hero-meta">
                                <div class="binduz-er-meta-category">
                                    <a href="#">Sunu-littoral</a>
                                </div>
                                
                            </div>
                            <div class="binduz-er-hero-title">
                                <h3 class="binduz-er-title"><a href="#">Sunu-littoral, yëfi ñëpp la</a></h3>
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
                    <a href="#lien_du_post"><img src="{{asset('storage')}}/{{$actualite->image}}" alt="" style="width: 120px ;"></a>
                </div>
                <div class="binduz-er-content">
                    <div class="binduz-er-post-meta-date">
                        <span><i class="fal fa-calendar-alt"></i> {{$actualite->date}}"</span>
                    </div>
                    <h4 class="binduz-er-title"><a href="#">{{$actualite->titre}} <br> </a></h4>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="binduz-er-trending-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="binduz-er-trending-news-topbar d-block d-md-flex justify-content-between align-items-center">
                    <div class="binduz-er-trending-box">
                        <div class="binduz-er-title">
                            <h3 class="binduz-er-title">Actualités</h3>
                        </div>
                    </div>

                    <div class="binduz-er-news-tab-btn d-flex justify-content-md-end justify-content-start">
                        <ul class="nav nav-pills " id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-0-tab" data-bs-toggle="pill" href="#pills-0" role="tab" aria-controls="pills-0" aria-selected="false">Toute catégorie</a>
                            </li>
                            @foreach ($categories as $categorie)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-{{$categorie->id}}-tab" data-bs-toggle="pill" href="#pills-{{$categorie->id}}" role="tab" aria-controls="pills-{{$categorie->id}}" aria-selected="false">{{$categorie->libelle}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="binduz-er-trending-news-list">
                            <div class="tab-content mt-50" id="pills-tabContent">
                               
                                <div class="tab-pane fade show active" id="pills-0" role="tabpanel" aria-labelledby="pills-0-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6">
                                            <div class="binduz-er-trending-box">
                                                <div class="binduz-er-trending-news-item">
                                                    <img src="{{asset('storage')}}/{{$actualitesLast->image}}" alt="">
                                                    <div class="binduz-er-trending-news-overlay">
                                                        <div class="binduz-er-trending-news-meta">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">{{$actualitesLast->categorie->libelle}}</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> {{$actualitesLast->date->format("d-M-y h:m")}}</span>
                                                            </div>
                                                            <div class="binduz-er-trending-news-title">
                                                                <h3 class="binduz-er-title"><a href="#">{{$actualitesLast->titre}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="binduz-er-trending-news-list-item">
                                                @foreach ($actualites as $actualite)
                                                        <div class="binduz-er-trending-news-list-box">
                                                            <div class="binduz-er-thumb">
                                                                <img src="{{asset('storage')}}/{{$actualite->image}}"alt="">
                                                            </div>
                                                            <div class="binduz-er-content">
                                                                <div class="binduz-er-meta-item">
                                                                    <div class="binduz-er-meta-categories">
                                                                        <a href="#">{{$actualite->categorie->libelle}}</a>
                                                                    </div>
                                                                    <div class="binduz-er-meta-date">
                                                                        <span><i class="fal fa-calendar-alt"></i>  {{$actualite->date->format("d-M-y h:m")}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="binduz-er-trending-news-list-title">
                                                                    <h4 class="binduz-er-title"><a href="#">{{$actualite->titre}}</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($categories as $categorie)
                                    <div class="tab-pane fade" id="pills-{{$categorie->id}}" role="tabpanel" aria-labelledby="pills-{{$categorie->id}}-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{asset('storage')}}/{{$actualitesLast->image}}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">{{$actualitesLast->categorie->libelle}}</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i> {{$actualitesLast->date->format("d-M-y h:m")}}</span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">{{$actualitesLast->titre}}</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item">
                                                    @foreach ($actualites as $actualite)
                                                        @if ($actualite->categorie_id == $categorie->id)
                                                            <div class="binduz-er-trending-news-list-box">
                                                                <div class="binduz-er-thumb">
                                                                    <img src="{{asset('storage')}}/{{$actualite->image}}"alt="">
                                                                </div>
                                                                <div class="binduz-er-content">
                                                                    <div class="binduz-er-meta-item">
                                                                        <div class="binduz-er-meta-categories">
                                                                            <a href="#">{{$actualite->categorie->libelle}}</a>
                                                                        </div>
                                                                        <div class="binduz-er-meta-date">
                                                                            <span><i class="fal fa-calendar-alt"></i>  {{$actualite->date->format("d-M-y h:m")}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="binduz-er-trending-news-list-title">
                                                                        <h4 class="binduz-er-title"><a href="#">{{$actualite->titre}}</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="  col-lg-3 col-md-12">
                <div class="binduz-er-sidebar-about">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">Avis</h4>
                    </div>
                    <div class="binduz-er-sidebar-about-item">
                        <div class="binduz-er-sidebar-about-user d-flex">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/littoral/dechets.jpg')}} " style="width: 100px; height: 80px ;">
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title">Avis ministriel</h4>
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
                            <p> Une étude, dont une copie nous est parvenue, montre que toutes les villes côtières de la sous-région risquent de disparaître d’ici l’an 2100,
                                si rien n’est fait, du fait de plusieurs facteurs dont l’érosion côtière, la pression démographique et l’activité socio-économique sur le littoral,
                                l’avancée de la mer et la changement climatique.</p>
                            <a class="binduz-er-main-btn" target="blank" href="http://senemag.free.fr/spip.php?article915">Plus d'Information ici</a>
                        </div>
                    </div>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
                                            <a href="#">Sunu-littoral</a>
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
