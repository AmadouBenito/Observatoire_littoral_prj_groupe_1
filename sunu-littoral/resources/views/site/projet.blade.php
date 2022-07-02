@extends('site.layouts.app')

@section('projet')

@foreach($projet as $projet)
<h3> <a href="#">{{$projet->fichir}}</a></h3>


<embed src="http:://localhost:8000/storage/app/public/Hbase-Hive.pdf" width="800" height="500" type="application/pdf"/>

<embed src="{{ asset('fic/08-Giraph.pdf') }}" width="800" height="500" type="application/pdf"/>
@endforeach

<embed src="https://www.codeur.com/tuto/wp-content/uploads/2022/02/pdf-test.pdf" width="800" height="500" type="application/pdf"/>

@endsection




