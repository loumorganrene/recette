@extends('layouts/main')

@section('content')

  <h2>Recettes</h2>
  <p>Ceci est ma page des recettes</p>

  <ul>
@for ($i=0; $i < 3; $i++)
    <li><a href="/recipes/{{$recipes[$i]->url}}">{{ $recipes[$i]->title }}</a></li>
@endfor
  </ul>

@endsection
