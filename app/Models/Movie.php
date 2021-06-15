<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MoviePoster;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $primaryKey = 'movie_id';

    protected $fillable = [
        'movie_id',
        'title',
        'overview',
        'popularity',
        'release_date',
        'runtime',
        'movie_status',
        'votes_avg',
        'votes_count',
        'is_favourite',
        'movie_role_id',
    ];

    public function movieposters()
    {
        return $this->hasMany(MoviePoster::class,'movie_id');
    }
}
