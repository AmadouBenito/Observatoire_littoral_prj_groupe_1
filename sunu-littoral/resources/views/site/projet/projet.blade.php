@extends('site.layouts.app')


@section('projet')

<div class="row">

    @for($i=0; $i<$nb_offre; $i++)
    <div class="col-lg-6">
      <div class="binduz-er-video-post recently-viewed-item">
          <div class="binduz-er-latest-news-item">
              <div class="binduz-er-thumb">
              
                    <iframe src="{{ $url_projet[$i] }}"  width="500"
                    height="500"></iframe>
                
              </div>
              <div class="binduz-er-content">
                  
                <div>
                    Titre: <span class="binduz-er-title"> {{ $nom[$i] }}</span>
                  </div>
              </div>
          </div>
      </div>
     </div>
    @endfor
  </div>






@endsection