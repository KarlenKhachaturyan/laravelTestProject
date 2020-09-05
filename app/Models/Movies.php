<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public $timestamps = false;
    protected $fillable = ['movie_name', 'about_movie', 'year', 'director_name', 'imdb_link', 'imdb_rating', 'genre_ids'];

    public function genre(){
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id');
    }
}
