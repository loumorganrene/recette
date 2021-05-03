<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function index() {
        //$recipes = Recipe::orderBy('id', 'desc')->take()->get(); //get all recipes
        $recipes = \App\Models\Recipe::where('status', 'published')->orderBy('id','desc')->take(100)->get();
        return view('home', array(
            'recipes' => $recipes
        ));
    }
}
