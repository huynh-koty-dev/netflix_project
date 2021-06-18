@extends('welcome')
@section('movie_content')
    <div class="detail-content">
        <img class="bg-detail" src="{{ asset('images/movies/'.$show_movie->background) }}" alt="..." width="100%">
        <div class="detail">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class=".col-4 .col-sm-4">
                        <div class="posters-movie">
                            <img src="{{ asset('images/posters/'.$show_movie->img) }}" alt="..."  >
                            <div class="btn-film">
                                <a style="color:#fff;" href="{{ route('watch_movie', ['name' => $show_movie->title, 'id' => $show_movie->id, 'episode_id' => session('episode')?session('episode'):1]) }}" class="btn btn-danger">xem phim</a>
                                <a style="color:#fff" href="#" class="btn btn-primary">trailer</a>
                            </div>
                        </div>

                    </div>
                    <div class=".col-6 .col-sm-4">
                        <div class="detail-movie">
                            <h1 style="position:relative"><a href="#" >{{ $show_movie->title }}</a> ({{ $show_movie->release_date }})</h1>
                            <div class="facts">
                            <span class="certification">
                                KD-19
                            </span>
                                <span class="genres">
                            &nbsp;&nbsp;<a href="#">{{ $show_movie->name }}</a>
                            </span>
                                &nbsp;
                                <span class="runtime">
                            *  &nbsp;
                            </span>
                            </div>
                            <div class="auto-actions">
                                <div class="chart">
                                    <div class="pieID--micro-skills pie-chart--wrapper">
                                        <div class="pie-chart">
                                            <div class="pie-chart__pie"></div>
                                            <ul style=" margin-top:-20px " class="pie-chart__legend">
                                                <li><span style="color:black;margin-top:-16px;">{{ $show_movie->votes_avg }}</span><span style="margin-top:-13px;">{{ 100 - $show_movie->votes_avg }}</span><em style="color: black; width:100px">Score:</em></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-list2">
                                    <a class="no_click" href="#"><img  src="{{ asset('icons/favorite_white_24dp.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="tagline">

                            </div>
                            <div class="overview">
                                <h4>Overview</h4>
                                <p>{{ $show_movie->overview }}</p>
                            </div>
                            <div class="profile">
                                <h5>{{ $show_movie->author }}</h5>
                                <p>Creator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Actors -->
                <div class="content-list-actors">
                    <h3>Actors</h3>
                    <a href="">View all</a>
                </div>
                <div class="actors">
                    @foreach($show_actors as $actor)
                        <div class="item">
                            <div class="feature-box">
                                <a href="#">
                                    <img src="{{ asset('images/actors/'.$actor->act_avatar) }}">
                                </a>
                            </div>
                            <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="#">{{ $actor->act_name }}</a></p>
                        </div>
                    @endforeach
                </div>
                <!-- Current season -->
                <div class="content-list-actors">
                    <h3>Current Season</h3>
                    <a href="">View all</a>
                </div>
                <div class="item">
                    <div class="box-season">
                        <a href="#">
                            <img src="{{ asset('images/posters/loki.jpg') }}">
                        </a>
                    </div>
                    <div class="content-season">
                        <h3><a href=""><b>Seasion 1</b> </a> </h3>
                        <span><b>2021 | 6 Episodes</b></span><br>
                        <span>Season 1 of Loki Thần Lừa Lọc premiered on June 9, 2021.</span>
                    </div>
                </div>
                <!--  film -->

            </div>
        </div>
    </div>
    <script>

        function sliceSize(dataNum, dataTotal) {
            return (dataNum / dataTotal) * 360;
        }

        function addSlice(id, sliceSize, pieElement, offset, sliceID, color) {
            $(pieElement).append("<div class='slice "+ sliceID + "'><span></span></div>");
            var offset = offset - 1;
            var sizeRotation = -179 + sliceSize;

            $(id + " ." + sliceID).css({
                "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
            });

            $(id + " ." + sliceID + " span").css({
                "transform"       : "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
                "background-color": color
            });
        }

        function iterateSlices(id, sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var
                maxSize = 179,
                sliceID = "s" + dataCount + "-" + sliceCount;

            if( sliceSize <= maxSize ) {
                addSlice(id, sliceSize, pieElement, offset, sliceID, color);
            } else {
                addSlice(id, maxSize, pieElement, offset, sliceID, color);
                iterateSlices(id, sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
            }
        }

        function createPie(id) {
            var
                listData      = [],
                listTotal     = 0,
                offset        = 0,
                i             = 0,
                pieElement    = id + " .pie-chart__pie"
            dataElement   = id + " .pie-chart__legend"

            color         = [
                "cornflowerblue",
                "olivedrab",
                "orange",
                "tomato",
                "crimson",
                "purple",
                "turquoise",
                "forestgreen",
                "navy"
            ];

            color = shuffle( color );

            $(dataElement+" span").each(function() {
                listData.push(Number($(this).html()));
            });

            for(i = 0; i < listData.length; i++) {
                listTotal += listData[i];
            }

            for(i=0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(id, size, pieElement, offset, i, 0, color[i]);
                $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
                offset += size;
            }
        }

        function shuffle(a) {
            var j, x, i;
            for (i = a.length; i; i--) {
                j = Math.floor(Math.random() * i);
                x = a[i - 1];
                a[i - 1] = a[j];
                a[j] = x;
            }

            return a;
        }

        function createPieCharts() {
            createPie('.pieID--micro-skills' );
            createPie('.pieID--categories' );
            createPie('.pieID--operations' );
        }

        createPieCharts();

    </script>
@endsection
