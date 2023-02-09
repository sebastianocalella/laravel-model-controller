<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){
        $movies = Movie::where('id','>',0)->limit(8)->get();
        return view('home', compact('movies'));
    }
}
