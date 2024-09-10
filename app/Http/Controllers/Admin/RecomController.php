<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitFeelingRequest;
use App\Http\Requests\SubmitRegionRequest;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class RecomController extends Controller
{
    public function recommendationResult(Request $request) {
        // $feeling = $request->feeling;
        // $region  = $request->region;

        // if($feeling->value == "Joy") {
        //     $genre = ['Musical','Animation','Family','Sport'];
        //     $genre_id = Genre::whereIn($genre)->get('id');
        //     $query1 = Movie::where('genre_id', $genre_id)->get('id');
        // }
        // else if($feeling->value == "Sadness") {
        //     $genre = ['Mystery','Thriller','War','Drama'];
        //     $genre_id = Genre::whereIn($genre)->get('id');
        //     $query1 = Movie::where('genre_id', $genre_id)->get('id');
        // }
        // else if($feeling->value == "Fear") {
        //     $genre = ['Horror','Sci-Fi','Thriller','Mystery'];
        //     $genre_id = Genre::whereIn($genre)->get('id');
        //     $query1 = Movie::where('genre_id', $genre_id)->get('id');
        // }
        // else if($feeling->value == "Disgust") {
        //     $genre = ['Crime','Western','Action','Thriller'];
        //     $genre_id = Genre::whereIn($genre)->get('id');
        //     $query1 = Movie::where('genre_id', $genre_id)->get('id');
        // }
        // else if($feeling->value == "Anger") {
        //     $genre = ['Western','Crime','Action','War'];
        //     $genre_id = Genre::whereIn($genre)->get('id');
        //     $query1 = Movie::where('genre_id', $genre_id)->get('id');
        // }

        // if($region->value == null) {
        //     $query2 = Movie::get('id');
        // }
        // else if($region->value != null) {
        //     $prequery2 = $region->value;
        //     $query2 = Movie::where('region', $prequery2)->get('id');
        // }

        // $recommendation = Movie::whereIn('genre', $query1)->whereIn('region', $query2)->orderBy('rating_imdb ASC')->get(3);
        $latestmovies = Movie::orderBy('year', 'DESC')->take(3)->get();

        return view('Public.Recom.Index', compact('latestmovies'));
    }

}
