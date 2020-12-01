<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    //
    public function indexAction(){
        return \view('distribution');
    }
}
