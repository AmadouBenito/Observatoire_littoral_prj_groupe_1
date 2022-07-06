@extends('site.layouts.app')


@section('projet')
<div class="row">
    @for($i=0; $i<$nb_projet; $i++)
        <div class="col-lg-3">
            <div class="binduz-er-latest-news-item">
                    <img  src="{{asset('site/images/iconePdf.jpg')}}" width="80" height="80" alt=""/>
                    <span class="binduz-er-title"> {{ $nom[$i] }}</span> 
            </div>

            <a href="{{ route('projet.telecharger',['id' => $id_projet[$i]]) }}"><button type="button" class="btn btn-outline-success">Telecharger</button></a>

            <a href="{{ route('projet.sIntéréssée' , [ $id_projet[$i]] ) }}"> <button type="button" class="btn btn-outline-warning" onclick="message();">Intérésée</button></a>
            
            <script>

                function message(){
                    alert("Votre demande a bien été prise en compte,nous vous contacterons pour plus d informations");
                }               
           </script>
        </div>
    @endfor
</div>
@endsection
