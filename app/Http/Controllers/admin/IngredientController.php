<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ingredients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category=new Ingredient;
        $category->ingredient_name=$request->ingredient_name;

        return to_route('ingredients.index')->with('success',"Ingredient enregistré avec success");
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
        $ingredient=Ingredient::find($id);

        return view('admin.ingredients.edit',compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ingredient=Ingredient::find($id);
        $ingredient->update([
            'ingredient_name' => $request->ingredient_name,
        ]);

        return to_route('ingredients.index')->with('success',"Ingredient Mise a jour avec success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ingredient=Ingredient::find($id);
        $ingredient->delete();

        return back()->with('fail',"Ingredient suprimé avec success");
    }
}