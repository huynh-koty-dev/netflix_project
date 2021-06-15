@extends('welcome')
@section('movie_content')
    <h1>Detail</h1>

    @foreach ($show_movie as $show)
        <img src="{{ asset('images/actors/'.$show->act_avatar) }}" alt="">
    @endforeach
@endsection