@extends('layouts/main')

@section('content')

  <h2>Accueil</h2>
  <p>Ceci est ma page d'accueil</p>

<ul>
  @foreach ( $recipes as $recipe )
    <li><a href="/recipes/{{$recipe->url}}">{{ $recipe->title }}</a></li>
  @endforeach
</ul>

@endsection
