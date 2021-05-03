<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function recipes()
    {
        $recipes = \App\Models\Recipe::where('status', 'published')->orderBy('id','desc')->take(3)->get(); //get all recipes

        return view('recipes',array(
            'recipes' => $recipes
        ));
    }

    public function show($url) {
        $recipe = \App\Models\Recipe::where('url', $url)->first(); //get first recipe with recipe_url == $recipe_url
        $author = \App\Models\User::where('id', $recipe->author_id)->first(); //get first author with author_name == $recipe_url
        return view('single',array( //Pass the recipe to the view
            'recipe' => $recipe,
            'author' => $author
        ));
     }

}
