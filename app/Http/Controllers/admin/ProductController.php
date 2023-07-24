<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
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

        return view('admin.Product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::find($id);
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