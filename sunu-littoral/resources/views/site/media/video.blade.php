@extends('site.layouts.app')


@section('mes_videos')

<div class="row" style="margin-left: 10px; margin-right: 10px;">
    @foreach($videos as $video)
      <div class="col-lg-4"  style="margin-top: 20px; margin-bottom: 20px;">
        <video controls autoplay muted allowfullscreen style="width: 100%; height: 100%;">
            <source src="{{ asset('storage/app/public/videos/videoplayback.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
      </div>
    @endforeach
</div>

@endsection
