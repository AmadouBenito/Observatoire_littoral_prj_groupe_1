@extends('site.layouts.app')


@section('projet')
<div class="row">
    @for($i=0; $i<$nb_projet; $i++)
        <div class="col-lg-3">
            <div class="binduz-er-latest-news-item">
                    <img  src="{{asset('site/images/iconePdf.jpg')}}" width="80" height="80" alt=""/>
                    <span class="binduz-er-title"> {{ $nom[$i] }}</span>
                    <a href="{{ route('projet.telecharger',['id' => $id_projet[$i]]) }}"><button type="button" class="btn btn-outline-success">Telecharger</button></a>
            </div>
        </div>
    @endfor
</div>
@endsection
