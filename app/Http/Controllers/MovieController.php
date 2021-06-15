<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\MoviePoster;
use Illuminate\Support\Facades\DB;
use Str;

class MovieController extends Controller
{
    public function index()
    {
        $count = Movie::all()->count();
        $random = rand(1, $count);
        $showbanner = Movie::find($random);
        $recommends = Movie::all();
        
        return view('components.home',['showbanner' => $showbanner, 'recommends' => $recommends]);
        
    }

    public function show($name, $id)
    {
        $show_movie = Movie::find($id)
                        ->join('movie_casts','movie_casts.movie_id','=','movies.movie_id')
                        ->join('actors','actors.act_id','=','movie_casts.act_id')
                        ->get(['actors.*']);

        return view('components.detail_movie', ['show_movie' => $show_movie]);
    }
}
