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

    public function detailByCategory($name){
        $category=Category::where('category_name',$name)->first();
        $recipes=Recipe::where('category_id',$category->id)->get();

        return view('Recipes.detailCategory',compact('category','recipes'));

    }
}