<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cosa Amici | Welcome to the Family</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
                background-image: url('/images/home-pic.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                opacity: 0.8;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background-color: rgba(240, 240, 240, 0.7);
                padding: 4rem;
                width: 60%;
                box-shadow: 3px 3px 20px 7px #222;
            }

            .title {
                font-size: 84px;
                font-family: 'Averia Serif Libre', cursive;
            }

            .subtitle {
                font-family: 'IM Fell English SC', serif;
                font-size: 1.4rem;
                font-weight: 600;
            }

            .links > a {
                color: #ddd;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .buttons {
                margin-top: 2rem;
            }

            .btn {
                text-decoration: none;
                background-color: #ddd;
                padding: 1rem;
                border: 1px solid #111;
                border-radius: 6px;
                font-weight: 900;
                color: #111;
                margin: 0 1rem;
                box-shadow: 0 2px 7px #444;
            }

            .register {
                background-color: #990000;
                color: #eee;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Cosa Amici
                </div>
                <div class="subtitle">
                    <p>Get organized<br>Get real</p>
                </div>
                <div class="buttons">
                    @auth
                        <a href="{{ url('/home') }}" class="btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn register">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
