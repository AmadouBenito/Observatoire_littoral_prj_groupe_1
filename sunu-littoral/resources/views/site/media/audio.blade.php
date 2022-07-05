@extends('site.layouts.app')


@section('mes_audios')


<div class="row" style="margin-left: 10px; margin-right: 10px;">
    @for($i=0; $i<$nb_audios; $i++)
       <div class="col-lg-4"  style="margin-top: 20px; margin-bottom: 20px;">
            <div>
                <audio controls="controls">
                    <source src="{{ $url_audios[$i] }}" type="audio/mpeg">
                   Votre navigateur ne supporte pas la balise audio
                </audio>
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
    @endfor
</div>

@endsection
