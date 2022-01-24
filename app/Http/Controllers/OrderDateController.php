<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class OrderDateController extends Controller
{
    public function index(){
      $movies = Movie::orderBy('date')->get();
       

      // dump($movies);

      return view('orderDate', compact('movies'));
    }
}
