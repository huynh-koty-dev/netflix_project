@extends('welcome')
@section('movie_content')
    <div class="detail-content">
        <img style="position:fixed;opacity: 0.2; border-radius:10px" src="{{ asset('images/movies/loki.jpg') }}" alt="..." width="100%">
        <div class="detail" style="position:relative;width:100%">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class=".col-4 .col-sm-4">
                        <div class="posters-movie">
                            <img style="margin-top:170px; padding-left:50px" src="{{ asset('images/posters/loki.jpeg') }}" alt="..." width="350px">
                        </div>
                    </div>
                    <div class=".col-6 .col-sm-4">
                        <div class="detail-movie">
                            <h1 style="position:relative"><a href="#" >Loki Thần Lừa Lọc</a> (2021)</h1>
                            <div class="facts">
                            <span class="certification">
                                KD-19
                            </span>
                                <span class="genres">
                            &nbsp;&nbsp;<a href="#">Phim Chính Kịch</a>,&nbsp;<a href="#">Sci-Fi &amp; Fantasy</a>
                            </span>
                                &nbsp;
                                <span class="runtime">
                            *  &nbsp;52m
                            </span>
                            </div>
                            <div class="auto-actions">
                                <div class="chart">
                                    <div class="pieID--micro-skills pie-chart--wrapper">
                                        <div class="pie-chart">
                                            <div class="pie-chart__pie"></div>
                                            <ul style=" margin-top:-20px " class="pie-chart__legend">
                                                <li><span style="color:black;margin-top:-16px;">80</span><span style="margin-top:-13px;">20</span><em style="color: black; width:100px">User Score:</em></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-list2">
                                    <a class="no_click" href="#"><img  src="{{ asset('icons/favorite_white_24dp.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="tagline">
                                <h5><i>Thời của Loki đã tới</i> </h5>
                            </div>
                            <div class="overview">
                                <h4>Overview</h4>
                                <p>Khi Steve Rogers, Tony Stark và Scott Lang quay trở về cột mốc 2012, ngay khi trận chiến ở New York kết thúc, để “mượn tạm” quyền trượng của Loki. Nhưng một tai nạn bất ngờ xảy đến, khiến Loki nhặt được khối lặp phương Tesseract và tiện thể tẩu thoát. Cuộc trốn thoát này đã dẫn đến dòng thời gian bị rối loạn. Cục TVA – tổ chức bảo vệ tính nguyên vẹn của dòng chảy thời gian, buộc phải can thiệp, đi gô cổ ông thần này về làm việc. Tại đây, Loki có hai lựa chọn, một là giúp TVA ổn định lại thời gian, không thì bị tiêu hủy. Dĩ nhiên Loki chọn lựa chọn thứ nhất. Nhưng đây là nước đi vô cùng mạo hiểm, vì ông thần này thường lọc lừa, “lươn lẹo”, chuyên đâm lén như bản tính tự nhiên của gã.</p>
                            </div>
                            <div class="profile">
                                <h5>Michael Waldron</h5>
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
                    <div class="item">
                        <div class="feature-box">
                            <a href="#">
                                <img src="{{ asset('images/actors/loki.jpg') }}">
                            </a>
                        </div>
                        <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">Tom Hiddleston</a></p>
                    </div>
                    <div class="item">
                        <div class="feature-box">
                            <a href="#">
                                <img src="{{ asset('images/actors/loki.jpg') }}">
                            </a>
                        </div>
                        <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">Tom Hiddleston</a></p>
                    </div>
                    <div class="item">
                        <div class="feature-box">
                            <a href="#">
                                <img src="{{ asset('images/actors/loki.jpg') }}">
                            </a>
                        </div>
                        <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">Tom Hiddleston</a></p>
                    </div>
                    <div class="item">
                        <div class="feature-box">
                            <a href="#">
                                <img src="{{ asset('images/actors/loki.jpg') }}">
                            </a>
                        </div>
                        <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">Tom Hiddleston</a></p>
                    </div>
                    <div class="item">
                        <div class="feature-box">
                            <a href="#">
                                <img src="{{ asset('images/actors/loki.jpg') }}">
                            </a>
                        </div>
                        <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">Tom Hiddleston</a></p>
                    </div>
                    <div class="item">
                        <div class="feature-box">
                            <a href="#">
                                <img src="{{ asset('images/actors/loki.jpg') }}">
                            </a>
                        </div>
                        <p style="margin-top: 10px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">Tom Hiddleston</a></p>
                    </div>
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
    <div class="content detail" style="color:#fff;display: flex;
    justify-content: center;">
        <a style="color:#fff;" href="{{ route('watch_movie', ['name' => $show_movie->title, 'id' => $show_movie->id, 'episode_id' => session('episode')?session('episode'):1]) }}" class="btn btn-danger">xem phim</a>
        <a style="color:#fff" href="#" class="btn btn-primary">trailer</a>
    </div>
@endsection
