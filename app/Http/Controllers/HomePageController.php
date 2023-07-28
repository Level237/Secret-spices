<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $randomRecipe=Recipe::inRandomOrder()
        ->limit(3)
        ->get();
        return view('homepage',compact('randomRecipe'));
    }
}
