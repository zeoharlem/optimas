<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    //
    public function indexAction(){
        return \view('contact');
    }
}
