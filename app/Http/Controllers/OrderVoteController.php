<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class OrderVoteController extends Controller
{
    public function index(){
      $movies = Movie::orderBy('vote','desc')->get();
        // ->orderBy('vote')
        ;
      

      // dump($movies);

      return view('orderVote', compact('movies'));
    }
}
