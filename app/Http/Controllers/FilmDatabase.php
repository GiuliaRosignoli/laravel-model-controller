<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;  //class I want to import
class FilmDatabase extends Controller
{
    // Homepage

    public function index(){

        $movies = Movie::all();
       // dump($movies);

        return view('homepage', compact('movies'));
    }
}
