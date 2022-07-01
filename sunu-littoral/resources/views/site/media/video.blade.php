@extends('site.layouts.app')


@section('mes_videos')

<div class="row" style="margin-left: 10px; margin-right: 10px;">
    @for($i=0; $i<$nb_videos; $i++)
       <div class="col-lg-4"  style="margin-top: 20px; margin-bottom: 20px;">
            <div>
                <video controls allowfullscreen style="width: 100%; height: 100%;">
                    <source src="{{ $url_videos[$i] }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="binduz-er-content">
                <div class="binduz-er-meta-item">
                    <div class="binduz-er-meta-categories">
                        <a href="#">Technology</a>
                    </div>
                    <div class="binduz-er-meta-date">
                        <span><i class="fal fa-calendar-alt"> {{ $dates[$i] }} </i></span>
                    </div>
                </div>
                <h5 class="binduz-er-title"><a href="#">{{  $titres[$i]  }}</a></h5>
            </div>
       </div>
    @endfor
</div>

@endsection
