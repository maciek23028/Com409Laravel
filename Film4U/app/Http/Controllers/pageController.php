<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
	public function index(){
    	$movies=Movie::all();
    	return View::make ('webPages.All')->withMovies($movies);
    }

    public function Mood(){
    	$movies=Movie::all();
    	return View::make ('webPages.Mood')->withMovies($movies);
    }
    public function Series(){
    	$movies=Movie::all();
    	return View::make ('webPages.Series')->withMovies($movies);
    }
}
