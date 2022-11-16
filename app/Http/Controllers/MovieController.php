<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = ['Black Adam', 'The Bad Guys', 'Spiderman: Another One'];
        return view('index', compact('movies'));
    }
}
