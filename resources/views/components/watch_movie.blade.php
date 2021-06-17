@extends('welcome')
@section('movie_content')
    <div class="content detail" style="color:#fff;display: flex;
    justify-content: center;">   
        {{-- <video src="{{ asset('videos/'.$show_film->path_video) }}" autoplay controls>

        </video> --}}
        
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{ asset('videos/'.$show_film->path_video) }}" allowfullscreen></iframe>
        </div>
        <div>
            <ul>
                @foreach ($show_episode as $episode)
                    <li><a href="{{ route('watch_movie', ['name' => $show_movie->title, 'id' => $show_movie->id, 'episode_id' => $episode->episode]) }}">{{ $episode->episode_name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection