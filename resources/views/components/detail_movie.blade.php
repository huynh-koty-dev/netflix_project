@extends('welcome')
@section('movie_content')
    <div class="content detail" style="color:#fff;display: flex;
    justify-content: center;">
        <a style="color:#fff;" href="{{ route('watch_movie', ['name' => $show_movie->title, 'id' => $show_movie->id, 'episode_id' => 'id'?session('episode'):1]) }}" class="btn btn-danger">xem phim</a>
        <a style="color:#fff" href="#" class="btn btn-primary">trailer</a>
    </div>
@endsection
