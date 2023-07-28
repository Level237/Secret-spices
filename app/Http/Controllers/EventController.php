<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $maxDateEvent=DB::table('events')->max('date_event');
        $eventPending=Event::where('date_event',$maxDateEvent)->first();
        $otherEvent=Event::where('date_event','!=',$maxDateEvent)->get();
        return view('Events.index',compact('eventPending','otherEvent'));
    }
}