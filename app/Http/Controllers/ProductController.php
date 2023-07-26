<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Weight;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products=Product::with('weight')->get()->groupBy('weight_id');
        $weights=Weight::all();
        //return $products;
        return view('products.index',compact('products','weights'));
    }

    public function detail($name){

        $weight=Weight::where('weight_name',$name)->first();
        $products=Product::where('weight_id',$weight->id)->get();
        return view('products.details',compact('products','weight'));
    }
}
