<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Genre;
use Error;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movies::with('genre')->get();
        return view('movies', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('new', ['genre'=> $genre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'movie_name'=>'required|min:4|max:34|alpha_dash',
            'movie_description'=>'required|min:10|max:250|string',
            'year'=>'required|gt:1920|lt:2021|numeric',
            'director_name'=>'required|min:5|max:34|string',
            'imdb_link'=>'required|url',
            'imdb_rating'=>'required|gt:0|lt:11|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        try {
            $newRec = new Movies;
            $newRec->movie_name = $request['movie_name'];
            $newRec->movie_description = $request['movie_description'];
            $newRec->year = $request['year'];
            $newRec->director_name = $request['director_name'];
            $newRec->imdb_link = $request['imdb_link'];
            $newRec->imdb_rating = $request['imdb_rating'];
            $newRec->save();

            // $genres = Genre::find([$request['id'],$request['genre_id']]);

            $newRec->genre()->attach($request['genre_ids']);

            return redirect('movies');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movies, $id)
    {
        $getData = Movies::findOrFail($id);
        return view('show', ['data'=> $getData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(Movies $movies, $id)
    {
            $selectedMovie = Movies::find($id);
            $genre = Genre::all();
            return view('edit', [
                'data' => $selectedMovie,
                'genre' => $genre
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movies $movies, $id)
    {
        $this->validate($request,[
            'movie_name'=>'required|min:5|max:34|alpha_dash',
            'movie_description'=>'required|min:10|max:250|string',
            'year'=>'required|gt:1920|lt:2021|integer',
            'director_name'=>'required|min:5|max:34|string',
            'imdb_link'=>'required|url',
            'imdb_rating'=>'required|gt:0|lt:11|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        try {
            $updateReg = Movies::find($id);
            $updateReg->update([
                        'movie_name' => $request['movie_name'],
                        'movie_description' =>  $request['movie_description'],
                        'year' => $request['year'],
                        'director_name' =>$request['director_name'],
                        'imdb_link' => $request['imdb_link'],
                        'imdb_rating' => $request['imdb_rating'],
                ]);

                $updateReg->genre()->attach($request['genre_ids']);

            return redirect('movies');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movies $movies, $id)
    {
        $record = Movies::findOrFail($id);
        $record->delete();
        return redirect()->route('movies');
    }
}
