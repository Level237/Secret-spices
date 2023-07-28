<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index(){
        $randomRecipe=Recipe::inRandomOrder()
        ->limit(3)
        ->get();

        $maxDateEvent=DB::table('events')->max('date_event');
        $eventPending=Event::where('date_event',$maxDateEvent)->first();
        $otherEvent=Event::where('date_event','!=',$maxDateEvent)->limit(2)->get();
        return view('homepage',compact('randomRecipe','eventPending','otherEvent'));
    }
}