<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>intro</title>
</head>

<body>
    <div class="custom-banner">
        <div class="opacity">
            <nav>
                <div class="brand">
                    <h1><b><a href="{{ route('login_view') }}">NETFLIX</a></b></h1>
                </div>
                <div class="dropdown custom-form-language">
                    <div class="btn dropbtn">
                        <span><i class="fas fa-globe"></i>
                            @if (Session::get('website_language') == 'vie')
                                {{ __('trans.vietnamese') }}
                            @else
                                {{ __('trans.english') }}
                            @endif
                            <i class="fas fa-caret-down"></i>
                        </span>
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ route('user.change-language', ['en']) }}">{{ __('trans.english') }}</a>
                        <a href="{{ route('user.change-language', ['vie']) }}"> {{ __('trans.vietnamese') }}</a>
                    </div>
                </div>
                <button class="btn btn-login" type="button" data-toggle="modal"
                    data-target="#exampleModalCenter">{{ __('trans.sign_in') }}</button>
            </nav>
            <!-- Modal -->
            <div class="modal fade {{ $errors->any() ? 'show' : '' }}"
                style="{{ $errors->any() ? 'display:block;padding:17px' : '' }}" id="exampleModalCenter" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{ __('trans.sign_in') }}</h5>
                            <button onclick="myFunction()" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('login_user') }}" name="myForm" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="{{ __('trans.email_address') }}" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="{{ __('trans.password') }}">
                                    @error('password')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-check" style="color:#fff">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                {{ __('trans.remember_me') }}
                                            </label>
                                        </div>
                                        <div class="col-sm-6" style="text-algin:right">
                                            <a style="margin-left:100px" href="{{ route('verify.email') }}">Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button onclick="myFunction()" type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">{{ __('trans.sign_in') }}</button>
                                <script>
                                    function myFunction() {
                                        location.reload();
                                    }

                                </script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="recommend">
                <h1>{{ __('trans.title_big') }}</h1>
                <h3>{{ __('trans.title_normal') }}</h3>
                <p>{{ __('trans.title_small') }}</p>
                <form action="{{ route('register_view') }}" method="GET">
                    <input type="email" value="{{ old('email_register') }}" name="email_register"
                        class="custom-input-email" placeholder="{{ __('trans.email_address') }}" required>
                    <button type="submit" class="btn btn-get-email">{{ __('trans.get_started') }} </button>
                </form>
            </div>
        </div>
    </div>
    <div class="hr"></div>
    <div class="intro-content">
        <div class="row">
            <div class="col-sm-6 custom-textleft">
                <h1>{{ __('trans.title_big_one') }}</h1>
                <h3>{{ __('trans.title_normal_one') }}</h3>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/tv.png') }}" alt="..." height="400px">
            </div>
        </div>
    </div>
    <div class="hr"></div>
    <div class="intro-content">
        <div class="row">
            <div class="col-sm-6" style="text-align:right">
                <img src="{{ asset('images/mobile-0819.jpg') }}" alt="..." height="400px">
            </div>
            <div class="col-sm-6 custom-textright">
                <h1>{{ __('trans.title_big_two') }}</h1>
                <h3>{{ __('trans.title_normal_two') }}</h3>
            </div>
        </div>
    </div>
    <div class="hr"></div>
    <div class="intro-content">
        <div class="row">
            <div class="col-sm-6 custom-textleft">
                <h1>{{ __('trans.title_big_three') }}</h1>
                <h3>{{ __('trans.title_normal_three') }}</h3>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/device-pile.png') }}" alt="..." height="400px">
            </div>
        </div>
    </div>
    <div class="hr"></div>
    <div class="intro-content">
        <div class="row">
            <div class="col-sm-6" style="text-align:right">
                <img src="{{ asset('images/kids.png') }}" alt="..." height="400px">
            </div>
            <div class="col-sm-6 custom-textright">
                <h1>{{ __('trans.title_big_four') }}</h1>
                <h3>{{ __('trans.title_normal_four') }}</h3>
            </div>
        </div>
    </div>
    <div class="hr"></div>
    <div class="intro-a-q">
        <div class="content-a-q">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h1>{{ __('trans.asked_questions') }}</h1>
                    <div class="accordion" id="myaccordion" style="max-width: 100%; margin-top:100px">
                        <div class="card">
                            <div class="card-header btn custom-collapse" data-toggle="collapse"
                                data-target="#noidungcard1" aria-expanded="true" data-parent="#myaccordion">
                                {{ __('trans.what_netflix') }}
                            </div>
                            <div class="card-body collapse custom-card" data-toggle="collapse" aria-expanded="false"
                                id="noidungcard1">
                                {!! __('trans.quest_one') !!}
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header btn custom-collapse" data-toggle="collapse"
                                data-target="#noidungcard2" data-parent="#myaccordion">
                                {{ __('trans.how_much') }}
                            </div>
                            <div class="card-body collapse custom-card" data-toggle="collapse" aria-expanded="false"
                                id="noidungcard2">
                                {!! __('trans.quest_two') !!}
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header btn custom-collapse" data-toggle="collapse"
                                data-target="#noidungcard3" data-parent="#myaccordion">
                                {{ __('trans.where_watch') }}
                            </div>
                            <div class="card-body collapse custom-card" data-toggle="collapse" aria-expanded="false"
                                id="noidungcard3">
                                {!! __('trans.quest_three') !!}
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header btn custom-collapse" data-toggle="collapse"
                                data-target="#noidungcard4" data-parent="#myaccordion">
                                {{ __('trans.how_cancel') }}
                            </div>
                            <div class="card-body collapse custom-card" data-toggle="collapse" aria-expanded="false"
                                id="noidungcard4">
                                {!! __('trans.quest_four') !!}
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header btn custom-collapse" data-toggle="collapse"
                                data-target="#noidungcard5" data-parent="#myaccordion">
                                {{ __('trans.what_watch') }}
                            </div>
                            <div class="card-body collapse custom-card" data-toggle="collapse" aria-expanded="false"
                                id="noidungcard5">
                                {!! __('trans.quest_five') !!}
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header btn custom-collapse" data-toggle="collapse"
                                data-target="#noidungcard6" data-parent="#myaccordion">
                                {{ __('trans.good_for_kids') }}
                            </div>
                            <div class="card-body collapse custom-card" data-toggle="collapse" aria-expanded="false"
                                id="noidungcard6">
                                {!! __('trans.quest_six') !!}
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
    <div class="hr"></div>
    {{ View::make('layouts.footer') }}
</body>

</html>
