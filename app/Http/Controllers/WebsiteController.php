<?php

namespace App\Http\Controllers;

use App\About;
use App\Team;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $about = About::all();
        $team = Team::all();
        return view('project.index',compact('about','team'));
    }
}
