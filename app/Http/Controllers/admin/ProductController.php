<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Nutrient;
use App\Models\Product;
use App\Models\Weight;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $weights=Weight::all();
        return view('admin.Product.create',compact('weights'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product=new Product;
        $product->product_name=$request->product_name;
        $product->product_description=$request->product_description;
        $product->weight_id=$request->weight_id;


        if($product->save()){
            $image_path = $request->file('image')->store('products', 'public');
            $image=new Image;
            $image->path=$image_path;

            $product->images()->save($image);

            if(isset($request->ingredient_name)){
                foreach($request->ingredient_name as $i){
                    $ingredient=new Ingredient;
                    $ingredient->ingredient_name=$i;
                    $ingredient->save();
                    $product->ingredients()->attach($ingredient);
                }
            }

            if(isset($request->nutrients )){
                foreach($request->nutrients as $index => $n){
                    $nutrient=new Nutrient;
                    $nutrient->nutrient_name=$n;
                    $nutrient->save();
                    $quantity = $request->quantity[$index];
                    $product->nutrients()->attach($nutrient,['quantity'=>$quantity]);
                }
            }

            return to_route('admin.product.index')->with('success',"Produit enregistré avec success");
        }else{
            return to_route('admin.product.index')->with('fail',"Une erreur s'est produite");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::find($id);
        $weights=Weight::all();
        return view('admin.Product.edit',compact('product','weights'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::find($id);

        if($request->hasFile('path')){
            $imagePath=public_path()."/storage/".$request->path;
            unlink($imagePath);
            $p = $request->path->store('products', 'public');
            $i=new Image;
            $i->path=$p;
            if($i->save()){

                $product->images()->attach($i->id);
            }else{

                return back('une Erreur s\'est produite');
            }
        } $product->images()->sync($request->path);


        $product->update([
            'product_name' => $request->product_name,
            'product_description'=>$request->product_description,
            'weight_id'=>$request->weight_id
        ]);

        return to_route('product.index')->with('success',"Produit Mise a jour avec success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::find($id);
        $product->delete();

        return back()->with('fail',"Produit suprimé avec success");
    }
}