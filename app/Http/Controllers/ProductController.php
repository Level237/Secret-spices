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

    public function detailByWeight($name){

        $weight=Weight::where('weight_name',$name)->first();
        $products=Product::where('weight_id',$weight->id)->get();
        return view('products.detailsWeight',compact('products','weight'));
    }

    public function detail($name,$gamme){
        $weight=weight::where('weight_name',$gamme)->first();
        $product=Product::where('product_name',$name)->where('weight_id',$weight->id)->first();

        $otherProduct=Product::where('weight_id',$weight->id)->get();
        //return $otherProduct;
        return view('products.details',compact('product','weight','otherProduct'));
    }
}