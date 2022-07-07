@extends('site.layouts.app')


@section('mes_images')

<div class="row">
  @for($i=0; $i<$nb_images; $i++)
    {{ $url_images }}
  <div class="col-lg-4">
    <div class="binduz-er-video-post recently-viewed-item">
        <div class="binduz-er-latest-news-item">
            <div class="binduz-er-thumb">
                <img src="{{  $url_images[$i] }}" alt="">
            </div>
            <div class="binduz-er-content">
                <div class="binduz-er-meta-item">
                    <div class="binduz-er-meta-categories">
                        <a href="#">{{ $domaines[$i] }}</a>
                    </div>
                    <div class="binduz-er-meta-date">
                        <span><i class="fal fa-calendar-alt"></i>{{ $dates[$i] }}</span>
                    </div>
                </div>
                <h5 class="binduz-er-title"><a href="#">{{ $titres[$i] }}</a></h5>
            </div>
        </div>
    </div>
   </div>
  @endfor
</div>

@endsection
