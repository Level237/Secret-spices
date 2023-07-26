<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event=new Event;
        $event->name_event=$request->name_event;
        $event->date_event=$request->date_event;
        $event->lieu_event=$request->lieu_event;
        $event->description_event=$request->description_event;

        if($event->save()){

            if(isset($request->images)){

                foreach($request->images as $image){
                    $path = $image->store('events', 'public');

                    $i=new Image;
                    $i->path=$path;
                    $event->images()->save($i);

                }
            }
            return to_route('admin.events.index')->with('success',"Evenements enregistré avec success");
        }else{
            return to_route('admin.events.index')->with('fail',"Une erreur s'est produite");
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
        //
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
        //
    }
}
