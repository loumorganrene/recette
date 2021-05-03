<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recipe;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = \App\Models\Recipe::all(); //get all recipes

        return view('admin/admin',array(
            'recipes' => $recipes
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        /*$this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'ingredients' => 'required',
            'tags' => 'required'
         ]);*/

        //  Store data in database
        //Recipe::create($request->all());
            Recipe::create(request([
            'author_id',
            'title',
            'url' => str_replace('', '-', $title),
            'ingredients',
            'content',
            'tags'
            ]));
        // 
        return redirect('/admin/recipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('admin/edit', array('recipe'=>$recipe));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
//dd($recipe->id);
       // $recipe = Recipe::findOrFail($id);
        //dd($recipe->id);
        $recipe->title = $request->title;
        $recipe->url = $request->url;
        $recipe->ingredients = $request->ingredients;
        $recipe->content = $request->content;
        $recipe->tags = $request->tags;
        $recipe->save();

        return redirect('/admin/recipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Recipe $recipe)
    {
        $recipe->delete();
        
        return redirect('/admin/recipe');
    }
}
