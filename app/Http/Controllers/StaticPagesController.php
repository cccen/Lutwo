<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        $feed_items=[];
        if(Auth::check()){
            $feed_items=Auth::User()->feed()->paginate(10);
        }
        return view('StaticPages.home',compact('feed_items'));
    }

    public function help()
    {
        return view('StaticPages/help');
    }

    public function about()
    {
        return view('StaticPages/about');
    }
}
