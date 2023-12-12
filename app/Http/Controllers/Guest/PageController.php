<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database utilizzando il model Movie
        $movies = Movie::all();

        // Passa i film alla view
        return view('guest.index', compact('movies'));
    }
}
