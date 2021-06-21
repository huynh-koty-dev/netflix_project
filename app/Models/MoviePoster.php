<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Movie;

class MoviePoster extends Model
{
    use HasFactory;

    protected $table = 'movie_posters';

    public function movie()
    {
        return $this->belongTo(Movie::class);
    }
}
