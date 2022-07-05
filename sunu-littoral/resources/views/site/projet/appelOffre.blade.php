@extends('site.layouts.app')


@section('appelOffre')

<div class="row">
    @for($i=0; $i<$nb_offre; $i++)
    <div class="col-lg-3">
      <div class="binduz-er-video-post recently-viewed-item">
        <div class="binduz-er-latest-news-item">
         
          
                    <img  src="{{asset('site/images/iconePdf.jpg')}}" width="80" height="80" alt=""/>
                    <span class="binduz-er-title"> {{ $libelle[$i] }}</span>
                     
                    <div class="binduz-er-meta-date">
                        <span><i class="fal fa-calendar-alt" ></i>cloture:{{ $dateFin[$i] }}</span>
                    </div>
                 
                   
                <a href="{{ route('appelOffre.postuler' , [$fichier[$i] , $appelOffre_id[$i]] ) }}"> <button type="button" class="btn btn-outline-warning">Postuler</button></a>
                <a href="{{ route('projet.telecharger',['id' => $appelOffre_id[$i]]) }}"><button type="button" class="btn btn-outline-success">Telecharger</button></a>
   
            
        </div>
       </div>
    </div>
    @endfor
  </div>




@endsection
