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

        return view('components.home', compact('showbanner', 'recommends'));
    }

    public function show($name, $id)
    {
        $show_movie = Movie::findOrFail($id)
                        ->join('genres', 'genres.id', '=', 'movies.genre_id')
                        ->get(['movies.*','genres.*'])
                        ->first();
        $show_actors =  Movie::findOrFail($id)
                        ->join('actors', 'actors.movie_id', '=', 'movies.actor_id')
                        ->take(6)
                        ->get(['movies.*','actors.*']);

        return view('components.detail_movie', compact('show_movie', 'show_actors'));
    }

    public function watchMovie($name, $id, $episode_id, Request $request)
    {
        $show_film = Movie::findOrFail($id)
                        ->join('episodes', 'episodes.movie_id', '=', 'movies.id')
                        ->where('episodes.id', $episode_id)
                        ->get(['episodes.*'])->first();
        $request->session()->put('episode', $show_film->episode);
        $show_episode = Movie::findOrFail($id)
                        ->join('episodes', 'episodes.movie_id', '=', 'movies.id')
                        ->get(['episodes.*']);
        $show_movie = Movie::findOrFail($id);

        return view('components.watch_movie', compact('show_film', 'show_episode', 'show_movie'));
    }
}
