@extends('site.layouts.app')

@section('presentation')

<section class="binduz-er-about-us-area pb-60 gray-bg bg-2">
    <div class=" container">
        <div class="row">
            <div class=" col-lg-12">
                <div class="binduz-er-about-us-thumb">
                    <img src="{{asset('site/images/slide/slide 7.png')}}" alt="">
                </div>
            </div>
            <div class=" col-lg-6">
                <div class="binduz-er-about-us-content">
                    <h4 class="binduz-er-title">A propos du littoral sénégalais</h4>
                    <p style="text-align: justify"> 
                        Selon le ministère de l’environnement et du développement durable, 
                        le littoral du Sénégal s’étend sur 700 km et correspond à la façade maritime de six régions 
                        administratives. Il constitue une zone attractive aussi bien pour ses écosystèmes très diversifiés 
                        (estuaires, niayes, lagunes, mangroves, dunes littorales…) que pour le développement des activités 
                        socio-économiques qui se traduit par : une forte concentration de la population sur la zone côtière (
                        60% de la population sénégalaise (12,5 millions d’habitants en 2010) ; le développement de plusieurs
                        activités économiques (tourisme, pêche, agriculture, industrie, mine…) ; Une forte urbanisation 
                        (25,7 % du linéaire côtier entre 2005-2010) ;de nombreuses infrastructures. Malgré une contribution de 68% 
                        au produit intérieur brut, le littoral sénégalais est très vulnérable.
                    </p>
                </div>
            </div>
            <div class=" col-lg-6">
                <div class="binduz-er-about-us-content">
                    <h4 class="binduz-er-title">Mission & Vision</h4>
                    <p>
                        L’amélioration, la valorisation de la connaissance scientifique et technique par la promotion, 
                        la production et le partage de données fiables et homogènes au travers de protocoles d’acquisition harmonisés ;
                        Mettre à disposition un outil d’aide et de partage à la compréhension, la connaissance et la 
                        gestion des phénomènes littoraux par la mutualisation des compétences et des moyens pour faciliter 
                        l’émergence d’actions communes, la promotion et la participation aux actions destinées à communiquer, 
                        sensibiliser et faire participer la société civile afin de diffuser les connaissances et accroître les sources d’acquisition ;
                        La mise en place d’une politique durable et intégrée du littoral en accompagnant l’émergence 
                        de nouveaux observatoires locaux, la consolidation des observatoires existants ou d’initiatives 
                        locales en termes de suivi du littoral.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-3 col-md-6">
                <div class="binduz-er-about-us-box">
                    <div class="binduz-er-icon">
                        <img src="{{asset('site/images/icon/4.png')}}" alt="">
                    </div>
                    <h4 class="binduz-er-title">Partage d’informations</h4>
                    <p>Il s’agit de partager les informations et actualités liées au littoral en temps réel. </p>
                </div>
            </div>
            <div class=" col-lg-3 col-md-6">
                <div class="binduz-er-about-us-box">
                    <div class="binduz-er-icon">
                        <img src="{{asset('site/images/icon/1.png')}}" alt="">
                    </div>
                    <h4 class="binduz-er-title">La gestion des appels d'offres</h4>
                    <p>Des appels d’offres seront lancés et toute entreprise pouvant remplir les exigences de l’observatoire pourra postuler.
                    </p>
                </div>
            </div>
            <div class=" col-lg-3 col-md-6">
                <div class="binduz-er-about-us-box">
                    <div class="binduz-er-icon">
                        <img src="{{asset('site/images/icon/3.png')}}" alt="">
                    </div>
                    <h4 class="binduz-er-title">Publication de rapports</h4>
                    <p>Les statistiques et autres indicateurs doivent être publiés afin d’entrevoir des solutions.</p>
                </div>
            </div>
            <div class=" col-lg-3 col-md-6">
                <div class="binduz-er-about-us-box">
                    <div class="binduz-er-icon">
                        <img src="{{asset('site/images/icon/4.png')}}" alt="">
                    </div>
                    <h4 class="binduz-er-title">Recueillir des données</h4>
                    <p>il est nécessaire de permettre à toutes structures de recherche de sauvegarder ses données dans un format qui sera choisi par les acteurs de l’observatoire</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection