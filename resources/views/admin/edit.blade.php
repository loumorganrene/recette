@extends('layouts/main')

@section('content')
<h2>Modifier la recette</h2>

<div class="container mt-5">

        <form method="POST" action="/admin/recipe/{{$recipe->id}}"> <!-- Resource = renvoie vers fonction store-->
        @method('PUT')
@csrf
        <div class="form-group">
          <label>Titre de la recette</label>
          <input type="text" class="form-control" name="title" value="{{$recipe->title}}">
        </div>
        <div class="form-group">
          <input type="hidden" value="1" class="form-control" name="author_id">
        </div>
        <div class="form-group">
          <label>Slug</label>
          <input type="text" class="form-control" name="url" value="{{$recipe->url}}">
        </div>
        <div class="form-group">
          <label>Recette</label>
          <textarea rows="4" class="form-control" name="content">{{$recipe->content}}</textarea>
        </div>
        <div class="form-group">
          <label>Ingrédients</label>
          <textarea rows="4" class="form-control" name="ingredients">{{$recipe->ingredients}}</textarea>
        </div>
        <div class="form-group">
          <label>Tags</label>
          <input type="text" class="form-control" name="tags" value="{{$recipe->tags}}">
        </div>
        <button type="submit" name="send" value="Modifier"> Modifier </button>
    </form>
</div>

@endsection