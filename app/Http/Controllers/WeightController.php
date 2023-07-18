<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightRequest;
use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gammes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gammes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WeightRequest $request)
    {
        $weight=new Weight;
        $weight->weight_name=$request->weight_name;

        return to_route('weight.index')->with('success',"Gamme enregistré avec success");;
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
        $weight=Weight::find($id);

        return view('admin.gammes.edit',compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WeightRequest $request, string $id)
    {
        $weight=Weight::find($id);
        $weight->update([
            'weight_name' => $request->weight_name,
        ]);

        return to_route('weight.index')->with('success',"Gamme Mise a jour avec success");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $weight=Weight::find($id);
        $weight->delete();

        return back()->with('fail',"Gamme suprimé avec success");
    }
}