@extends('site.layouts.app')


@section('projet')

<div class="row">
@for($i=0; $i<$nb_offre; $i++)
<div class="col-lg-3">
  <div class="binduz-er-video-post recently-viewed-item">
    <div class="binduz-er-latest-news-item">
     
      
                  <img  src="{{asset('site/images/iconePdf.jpg')}}" width="80" height="80" alt=""/>
                  <span class="binduz-er-title"> {{ $nom[$i] }}</span>
                 
                 
                  
</div>
</div>
</div>
@endfor
</div>
@endsection