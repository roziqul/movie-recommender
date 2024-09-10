<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $latestmovies = Movie::orderBy('year', 'DESC')->take(3)->get();

        // return view('recom.index', compact('latestmovies'));
    }

    public function create()
    {
        // return view('recom.input-mood');
        // return view('recom.input-day');
        return view('recom.input');
    }

    public function store(Request $request)
    {
        $feeling = $request->feeling;
        $condition  = $request->condition;

        if($feeling == "Joy") {
            $genre = ['Musical','Animation','Family','Sport'];
            $genre_id = Genre::whereIn('name', $genre)->get('id');
            $query1 = Movie::whereIn('genre_id', $genre_id)->get('id');
        }
        else if($feeling == "Sadness") {
            $genre = ['Mystery','Thriller','War','Drama'];
            $genre_id = Genre::whereIn('name', $genre)->get('id');
            $query1 = Movie::whereIn('genre_id', $genre_id)->get('id');
        }
        else if($feeling == "Fear") {
            $genre = ['Horror','Sci-Fi','Thriller','Mystery'];
            $genre_id = Genre::whereIn('name', $genre)->get('id');
            $query1 = Movie::whereIn('genre_id', $genre_id)->get('id');
        }
        else if($feeling == "Disgust") {
            $genre = ['Crime','Western','Action','Thriller'];
            $genre_id = Genre::whereIn('name', $genre)->get('id');
            $query1 = Movie::whereIn('genre_id', $genre_id)->get('id');
        }
        else if($feeling == "Anger") {
            $genre = ['Western','Crime','Action','War'];
            $genre_id = Genre::whereIn('name', $genre)->get('id');
            $query1 = Movie::whereIn('genre_id', $genre_id)->get('id');
        }

        if($condition == "Tired"){
            $recommendation = Movie::with('genre')->whereIn('id', $query1)->orderBy('duration', 'ASC')->take(8)->get();
        }else if($condition == "OK"){
            $recommendation = Movie::with('genre')->whereIn('id', $query1)->orderBy('imdb_rating', 'DESC')->take(8)->get();
        }
        // return response()->json($query2);


        // Standar Ganda
        // if($region->value == null) {
        //     $query2 = Movie::get('id');
        // }
        // else if($region->value != null) {
        //     $prequery2 = $region->value;
        //     $query2 = Movie::where('region', $prequery2)->get('id');
        // }

        // $recommendation = Movie::with('genre')->whereIn('id', $query2)->get();

        // $val = $recommendation->orderBy('imdb_rating', 'DESC')->get();
        return view('recom.index', compact('recommendation'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::with('genre')->where('id', $id)->get();
        return view('recom.detail', compact('movie'));
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
}
