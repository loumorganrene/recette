@extends('layouts/main')

@section('content')

  <h2>Recette</h2>
  <p>Ceci est ma page de Recette</p>

  <main>
    <h3>{{ $recipe->title }}</h3>
    <p>{{ $recipe->content }}</p>
    <ul>
        <li>{{ $recipe->ingredients }}</li>
    </ul>
    <p>Postée par {{ $author->name }}</p>

  </main>

@endsection
