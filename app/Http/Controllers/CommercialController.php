<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommercialController extends Controller
{
    //
    public function indexAction(){
        return \view('commercial');
    }
}
