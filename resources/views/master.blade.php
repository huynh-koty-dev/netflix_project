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
                <a href="{{ route('login_view') }}" class="btn btn-login">{{ __('trans.sign_in') }}</a>
            </nav>
            @yield('content')
        </div>
    </div>
    <div class="hr"></div>
    {{ View::make('layouts.footer') }}
</body>

</html>
