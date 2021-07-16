<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class Moviecontroller extends Controller
{
    public function index(){

        $title= "i nostri film";
        $movies = Movie::all();




        return view("home",compact("movies"));
    }
}
