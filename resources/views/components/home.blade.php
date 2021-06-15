@extends('welcome')
@section('movie_content')
    <section class="content">
        <img src="{{ asset('images/movies/'.$showbanner->background) }}" alt="..." width="100%">
        <div class="content-name">
            <div class="content-title">
                <h3>{{ $showbanner->title }}</h3>
                <span class="content-grade">{{ $showbanner->votes_avg }} Point</span><span class="content-year">{{ $showbanner->release_date }}</span>
                <p>{{ $showbanner->overview }}</p>
            </div>
            <div class="content-button">
                <a href="{{ route('detail', ['name' => $showbanner->title, 'id' => $showbanner->movie_id]) }}" class="btn featured--watchbutton" type="button"><img src="{{ asset('icons/play.svg') }}">Play</a>
                <button class="featured--mylistbutton" type="button"><img src="{{ asset('icons/plus.svg') }}">
                    Add Favourite</button>
            </div>
        </div>
    </section>
    <section id="Movies" class="content-list">
        <div class="content-list-tilte">
            <h3>Recommend For You</h3>
        </div>
        <ul id="responsive" class="cs-hidden">
            @foreach ($recommends as $recommend)
                <li class="item">
                    <div class="feature-box">
                        <a href="#">
                            <img src="{{ asset('images/posters/'.$recommend->img) }}">
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        </ul>
    </section>


    <div class="feature-heading">
        <h2>TV Show</h2>
    </div>
    <ul id="responsive-4" class="cs-hidden">
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
    </ul>
    </ul>




    <div class="feature-heading">
        <h2>Featured Categories</h2>
    </div>
    <ul id="responsive-3" class="cs-hidden">
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
    </ul>
    </ul>

    <div class="feature-heading">
        <h2>Featured Categories</h2>
    </div>
    <ul id="responsive-2" class="cs-hidden">
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
        <li class="item">
            <div class="feature-box">
                <a href="#">
                    <img src="{{ asset('images/content.jpg') }}">
                </a>
            </div>
        </li>
    </ul>
@endsection
