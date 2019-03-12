<?php

namespace App\Http\Controllers;
use View;
use DB;
use App\Movie;
use Illuminate\Http\Request;

class moviesController extends Controller
{
    //
	public function index(){
    	//$movies = Movie::get();
    	$movies=Movie::all();
    	return View::make ('movies.index')->withMovies($movies);
    }

    public function show(Movie $movie)
    {
    	return view ('movies.contentOfMovie')->withMovie($movie);
    }
    public function showMain()
    {
    	return view ('layouts.main');
    }
    public function findMovie(){
    	$movieId = Movie::Find(1);
    	return view ('movies.index')->withMovie($movieId);
    }

        public function mainPage(){
        return view ('layouts.mainPageLayout');
    }

}
