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
                                <h4 class="binduz-er-title">Amadou DIOP</h4>
                                <span>Ministre de l'urbanisme</span>
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

<section class="binduz-er-trending-today-area">
    <div class="binduz-er-bg-cover"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="binduz-er-trending-today-topbar">
                    <div class="binduz-er-trending-today-title">
                        <h3 class="binduz-er-title">Derniers fichiers</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($fichiers as $fichier)
                
            <div class="col-lg-3 col-md-6">
                <div class="binduz-er-trending-today-item">
                    <div class="binduz-er-trending-news-list-box">
                        <div class="binduz-er-thumb">
                            <img src="{{('site/images/slide/Slide 5.png')}}" alt="">
                        </div>
                        <div class="binduz-er-content">
                            <div class="binduz-er-trending-news-list-title">
                                <h4 class="binduz-er-title"><a href="#">{{$fichier->titre}}</a></h4>
                            </div>
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-categories">
                                    <a href="{{ route('fichier.telecharger',['id' => $fichier->id]) }}">Telecharger</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> {{$fichier->date->format('j-M-y H:m','24h')}}</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
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
                        <h3 class="binduz-er-title">Galerie</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($images as $image)
                        @if ($image->type_fichier->libelle == "image")
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{asset('storage')}}/{{$image->url}}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">{{$image->domaine->libelle}}</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i> {{$image->date->format('d-M-y h:m', '24H')}}</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">{{$image->titre}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="binduz-er-add pt-10">
                    <img src="{{asset('site/images/space-thumb.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                {{-- <div class="binduz-er-sidebar-about">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">About Me</h4>
                    </div>
                    <div class="binduz-er-sidebar-about-item">
                        <div class="binduz-er-sidebar-about-user d-flex">
                            <div class="binduz-er-thumb">
                                <img src="{{asset('site/images/user.jpg')}}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title">Miranda Halim</h4>
                                <span>Author</span>
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
                            <p>The functional aspect comes first in the work process because it’s the core of the object: What is its purpose? something else?</p>
                            <a class="binduz-er-main-btn" href="#">Connect With Me</a>
                        </div>
                    </div>
                </div> --}}
                <div class="binduz-er-sidebar-latest-post">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">Appel d'offre</h4>
                    </div>
                    <div class="binduz-er-sidebar-latest-post-box">
                        @foreach ($appelDoffres as $appel)
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{asset('site/images/slide/appel.png')}}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i> Date fin : {{ $appel->dateFin->format('d-M-y : h:m','24H')}}</span>
                                    <h4 class="binduz-er-title"><a href="#telecharger">{{$appel->libelle}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
                <div class="binduz-er-sidebar-add-box mt-40">
                    <div class="binduz-er-logo">
                        <a href="#"><img src="{{asset('images/logo_white.png')}}" alt=""></a>
                    </div>
                    <p>La préservation du littoral est un devoir pour tout citoyen sénégalais. Alors prenons soin de notre littoral</p>
                </div>
            </div>
        </div>
    </div>
</section>


<br>

@endsection
