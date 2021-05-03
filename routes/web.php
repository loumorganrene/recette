<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\PagesController;
//Route::get('/', [PagesController::class, 'home']);
/*Route::get('/recipes', [PagesController::class, 'recipes']); */
Route::get('/contact', [PagesController::class, 'contact']);

use App\Http\Controllers\RecipesController;
Route::get('/recipes', [RecipesController::class, 'recipes']);
Route::get('/recipes/{url}',[RecipesController::class, 'show']);

use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'createForm']);
Route::post('/contact', [ContactController::class, 'ContactForm'])->name('contact.store');

use App\Http\Controllers\Admin\AdminController;
Route::resource('admin/recipe', AdminController::class);