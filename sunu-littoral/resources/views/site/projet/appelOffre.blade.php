@extends('site.layouts.app')


@section('appelOffre')

<div class="row">

    @for($i=0; $i<$nb_offre; $i++)
    <div class="col-lg-6">
      <div class="binduz-er-video-post recently-viewed-item">
          <div class="binduz-er-latest-news-item">
              <div class="binduz-er-thumb">
              
                    <iframe src="{{ $url_appOffre[$i] }}"  width="500"
                    height="500"></iframe>
                
              </div>
              <div class="binduz-er-content">
                  <div class="binduz-er-meta-item">

                      <div class="binduz-er-meta-date">
                          <span><i class="fal fa-calendar-alt"></i>date de soumission {{ $dateDeb[$i] }}</span><br/>
                          <span><i class="fal fa-calendar-alt"></i>date de cloture {{ $dateFin[$i] }}</span>
                      </div>
                  </div>
                <div>
                    Titre: <span class="binduz-er-title"> {{ $libelle[$i] }}</span>
                  </div>
              </div>
          </div>
      </div>
     </div>
    @endfor
  </div>




@endsection
