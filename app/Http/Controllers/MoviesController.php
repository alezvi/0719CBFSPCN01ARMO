<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->has('q')) {
            $movies = Movie::where('title', 'like', '%' . $request->get('q') . '%')
                ->paginate(3)
                ->appends($request->only('q'));
        } else {
            $movies = Movie::paginate(3)->appends($request->only('q'));
        }

        return $movies;

        return view('movies.index', [
            'movies' => $movies,
        ]);
    }

    public function show(Movie $movie) 
    {
        return $movie;
    }
}
