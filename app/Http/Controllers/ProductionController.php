<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    //
    public function indexAction(){
        return \view('production');
    }
}
