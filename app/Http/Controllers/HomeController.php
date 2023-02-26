<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodo che si occupa della pagina
    public function index()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
