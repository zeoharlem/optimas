<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function indexAction(){
        $news   = \App\Blog::paginate(4);
        return \view('news')->with('news', $news);
    }
}
