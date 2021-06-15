<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/movie.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="movie.css">
    <!--lightslider-css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
    <!--Jquery-->
    {{-- <script src="js/JQuery.js"></script> --}}
    <!--light-slider-js-->
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <title>NetFlix</title>
</head>

<body>
    {{ View::make('layouts.header') }}
    @yield('movie_content')
    {{ View::make('layouts.footer') }}
    <script>
        $(document).ready(function() {
            $('#responsive').lightSlider({
                item: 8,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 2,
                            slideMove: 1
                        }
                    }
                ]
            });
        });
        $(document).ready(function() {
            $('#responsive-2').lightSlider({
                item: 8,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 2,
                            slideMove: 1
                        }
                    }
                ]
            });
        });
        $(document).ready(function() {
            $('#responsive-3').lightSlider({
                item: 8,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 2,
                            slideMove: 1
                        }
                    }
                ]
            });
        });
        $(document).ready(function() {
            $('#responsive-4').lightSlider({
                item: 8,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 2,
                            slideMove: 1
                        }
                    }
                ]
            });
        });
        $(document).ready(function() {
            $('#autoWidth').lightSlider({

                autoWidth: true,
                loop: true,
                onSliderLoad: function() {
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });
        });
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        })

        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            navigation.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
    </script>
</body>

</html>
