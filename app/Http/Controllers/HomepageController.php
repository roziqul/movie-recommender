<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestmovies = Movie::orderBy('year', 'DESC')->take(3)->get();
        $topmovies = Movie::orderBy('imdb_rating', 'DESC')->take(12)->get();
        $genres = Genre::all();

        // return response()->json($topmovies);

        return view('home', compact('topmovies','latestmovies','genres'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::where('id', $id)->get();
        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function allMovie()
    {
        $allMovies = Movie::orderBy('title', 'ASC')->get();
        $genres = Genre::all();

        return view('movie.index', compact('allMovies','genres'));
    }
}
