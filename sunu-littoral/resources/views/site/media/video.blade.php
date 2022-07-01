@extends('site.layouts.app')


@section('mes_videos')

<div class="row" style="margin-left: 10px; margin-right: 10px;">
    @foreach($videos as $video)
       <div class="col-lg-4"  style="margin-top: 20px; margin-bottom: 20px;">
            <div>
                <video controls allowfullscreen style="width: 100%; height: 100%;">
                    <source src="{{ $el1 }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
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
    @endforeach
</div>

@endsection
