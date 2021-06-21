<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
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

        return view('components.home', ['showbanner' => $showbanner, 'recommends' => $recommends]);
    }

    public function show($name, $id)
    {
        $show_movie = Movie::find($id);

        return view('components.detail_movie', ['show_movie' => $show_movie]);
    }

    public function watchMovie($name, $id, $episode_id, Request $request)
    {
        $show_film = Movie::find($id)
                        ->join('episodes', 'episodes.movie_id', '=', 'movies.id')
                        ->where('episodes.id', $episode_id)
                        ->get(['episodes.*'])->first();
        $request->session()->put('episode', $show_film->episode);
        $show_episode = Movie::find($id)
                        ->join('episodes', 'episodes.movie_id', '=', 'movies.id')
                        ->get(['episodes.*']);
        $show_movie = Movie::find($id);

        return view('components.watch_movie', ['show_film' => $show_film, 'show_episode' => $show_episode, 'show_movie' => $show_movie]);
    }
}
