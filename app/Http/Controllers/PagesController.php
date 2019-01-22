<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        if(Auth::check()){
        return view('welcome');
        }
    else return view('welcome_guest');
    }



    public function contact(){
        $projects = \App\Project::all();
        #return $projects; uncomment kore dekhe nao mezix
        return view('contact',['projects' => $projects]);
    }
}
