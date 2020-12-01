<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function indexAction(){
        return \view('media');
    }

    public function shouldersAction(){
        return \view('media.shoulders');
    }

    public function broadcastersAction(){
        return \view('media.broadcasters');
    }

    public function afrosportAction(){
        return \view('media.afrosport');
    }
}
