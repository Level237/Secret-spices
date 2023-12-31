<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(){

        $recipes=Recipe::with('category')->get()->groupBy('category_id');
        $categories=Category::all();
        return view('Recipes.index',compact('recipes','categories'));
    }

    public function detailByCategory($slug){
        $category=Category::where('slug',$slug)->first();
        $recipes=Recipe::where('category_id',$category->id)->get();

        return view('Recipes.detailCategory',compact('category','recipes'));

    }

    public function detail($slug,$category){
        $category=Category::where('slug',$category)->first();
        $recipe=Recipe::where('slug',$slug)->where('category_id',$category->id)->first();
        $randomRecipe=Recipe::inRandomOrder()
        ->limit(8)
        ->get();
        return view('Recipes.details',compact('category','recipe','randomRecipe'));
    }
}