<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $movies = Movie::with('genre')->orderBy('title', 'ASC')->get();
        return view('admin.movie.index', compact('movies','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.movie.create', compact('genres'));
    }

    public function show($id)
    {
        $movie = Movie::where('id', $id)->get();
        return view('admin.movie.show', compact('movie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumbnail')) {
            $storedFilePath = Storage::putFile('public/thumbnails', $request->file('thumbnail'));
            $validated['thumbnail'] = URL::to('/') . Str::of($storedFilePath)->replaceFirst('public/', '/storage/');
        }
        $movie = Movie::create($validated);
        return redirect(route('movies.index'))->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::where('id', $id)->get();
        $genre_id = Movie::where('id', $id)->get('genre_id');
        $genres = Genre::whereNotIn('id', $genre_id)->get();

        return view('admin.movie.edit', compact('movie','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $validated = $request->validated();
        // return response()->json($validated);

        if ($request->hasFile('thumbnail')) {
            $storedFilePath = Storage::putFile('public/thumbnails', $request->file('thumbnail'));
            $validated['thumbnail'] = URL::to('/') . Str::of($storedFilePath)->replaceFirst('public/', '/storage/');
        }
        $movie->update($validated);

        return redirect(route('movies.index'))->with('success', 'Data berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect(route('movie.index'))->with('success', 'Data berhasil dihapus !');
    }
}
