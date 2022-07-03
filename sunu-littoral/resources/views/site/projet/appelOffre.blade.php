@extends('site.layouts.app')


@section('appelOffre')

<div class="row">

    @for($i=0; $i<$nb_offre; $i++)
    <div class="col-lg-4">
      <div class="binduz-er-video-post recently-viewed-item">
          <div class="binduz-er-latest-news-item">
              <div class="binduz-er-thumb">
              
                    <iframe src="{{ $url_appOffre[$i] }}"></iframe>
                    <p> {{ $url_appOffre[$i] }}</p>
              </div>
              <div class="binduz-er-content">
                  <div class="binduz-er-meta-item">

                      <div class="binduz-er-meta-date">
                          <span><i class="fal fa-calendar-alt"></i>{{ $dateDeb[$i] }}</span>
                          <span><i class="fal fa-calendar-alt"></i>{{ $dateFin[$i] }}</span>
                      </div>
                  </div>
                  <h5 class="binduz-er-title">{{ $libelle[$i] }}</h5>
              </div>
          </div>
      </div>
     </div>
    @endfor
  </div>

@endsection
