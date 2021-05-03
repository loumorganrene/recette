@extends('layouts/main')

@section('content')

<h2>Administration des recettes</h2>

<li><a href="/admin/recipe/create">+ Nouvelle recette</a></li>
</br>
<ul>
@foreach ($recipes as $recipe)
    <li>
      <a href="/recipe/{{$recipe->url}}">{{ $recipe->title }}</a>
      <br>
      <a href="{{ route('recipe.edit', $recipe->id) }}"> Modifier </a>
      <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><a onclick="return confirm('Êtes-vous sur ?')"> Supprimer </a></button>
      </form>
    </li>
@endforeach
  </ul>

@endsection