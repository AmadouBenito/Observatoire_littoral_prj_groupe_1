@extends('site.layouts.app')


@section('mes_images')

<div class="row">
  @foreach($images as $image)
  <div class="col-lg-4">
    <div class="binduz-er-video-post recently-viewed-item">
        <div class="binduz-er-latest-news-item">
            <div class="binduz-er-thumb">
                <img src="{{  $el }}" alt="">
            </div>
            <div class="binduz-er-content">
                <div class="binduz-er-meta-item">
                    <div class="binduz-er-meta-categories">
                        <a href="#">Technology</a>
                    </div>
                    <div class="binduz-er-meta-date">
                        <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                    </div>
                </div>
                <h5 class="binduz-er-title"><a href="#">Championing women’s sports with the WNBA and ESPN</a></h5>
            </div>
        </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
