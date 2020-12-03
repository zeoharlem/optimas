<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function indexAction(){
        $events = \App\Events::paginate(4);
        return \view('events')->with("events", $events);
    }
}
