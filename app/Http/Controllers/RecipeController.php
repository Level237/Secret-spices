<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(){

        $recipes=Recipe::with('category')->get()->groupBy('category_id');
        $weights=Category::all();
        return view('Recipes.index',compact('recipes','weights'));
    }
}
