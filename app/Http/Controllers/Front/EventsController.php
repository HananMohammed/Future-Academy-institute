<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::paginate(6);

        return view('front.event.index', compact('events'));
    }
    public function singleEvent($id)
    {
        $event = Event::find($id);

        $events = Event::all();

        $related_Events = Event::where('id', '!=', $id)->get();

        return view('front.event.single_event.index', compact('event','events','related_Events'));
    }
}
