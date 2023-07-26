<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes=Recipe::all();
        return view('admin.Recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.Recipes.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $timeArray=explode(':',$request->time);
        $time="";
        if($timeArray[0] !="00"){
            $time="$timeArray[0]h:$timeArray[1]min";
        }else{
            $time="$timeArray[1]min";
        }

        $recipe=new Recipe;
        $recipe->name_recipe=$request->name_recipe;
        $recipe->category_id=$request->category_id;
        $recipe->description_recipe=$request->description_recipe;
        $recipe->time=$time;
        $recipe->number_person=$request->number_person;

        if($recipe->save()){

            if(isset($request->images)){

                foreach($request->images as $image){
                    $path = $image->store('recipes', 'public');

                    $i=new Image;
                    $i->path=$path;
                    $recipe->images()->save($i);

                }
            }
            foreach($request->ingredient_name  as $index => $i){
                $ingredient=new Ingredient;
                $ingredient->ingredient_name=$i;
                $ingredient->save();
                $quantity = $request->quantity[$index];
                $recipe->ingredients()->attach($ingredient,['quantity'=>$quantity]);
            }

            foreach($request->steps as $step){

                $stepModel=new Step;
                $stepModel->description=$step;
                $stepModel->save();
                $recipe->steps()->attach($stepModel);
            }

            return to_route('admin.recipe.index')->with('success',"Recette enregistré avec success");

        }else{
            return to_route('admin.recipe.index')->with('fail',"Une erreur s'est produite");
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
        $recipe=Recipe::find($id);

        return view('admin.Recipes.edit',compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipe=Recipe::find($id);
        $recipe->delete();

        return back()->with('fail',"Ingredient suprimé avec success");
    }
}