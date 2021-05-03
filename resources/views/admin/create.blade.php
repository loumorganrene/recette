@extends('layouts/main')

@section('content')
<h2>Créer une nouvelle recette</h2>

<div class="container mt-5">

        <form method="post" action="/admin/recettes"> <!-- Resource = renvoie vers fonction store-->
@csrf
        <div class="form-group">
          <label>Titre de la recette</label>
          <input id="recipeTitle" type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <input type="hidden" value="1" class="form-control" name="author_id">
        </div>
        <div class="form-group">
          <label>Slug</label>
          <input id="urlSlug" type="text" class="form-control" name="url">
        </div>
        <div class="form-group">
          <label>Recette</label>
          <textarea rows="4" class="form-control" name="content"></textarea>
        </div>
        <div class="form-group">
          <label>Ingrédients</label>
          <textarea rows="4" class="form-control" name="ingredients"></textarea>
        </div>
        <div class="form-group">
          <label>Tags</label>
          <input type="text" class="form-control" name="tags">
        </div>
        <button type="submit" name="send" value="Poster"> Poster </button>
    </form>
</div>


@endsection