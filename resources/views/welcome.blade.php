<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Péon-Beta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            html, body {
                background: url("https://www.trienaldelisboa.com/ohl/wp-content/uploads/2018/08/G-Reitoria-da-Universidade-de-Lisboa-c-Reitoria-da-Universidade-de-Lisboa-1-1024x683.jpg")
                no-repeat center center;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
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

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                        <a href="{{Auth::user()->login_path()}}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div style="height: 256px"></div>
                <div class="title m-b-md">
                    Péon-Beta
                </div>
                <div class="links">
                    <a href="https://admin.di.fc.ul.pt/tutoriais/">Tutoriais</a>
                    <a href="/contact">Contato</a>
                    <a href="/team">Equipa</a>
                    <a href="https://suporte.di.fc.ul.pt">Suporte</a>
                    <a href="https://admin.di.fc.ul.pt/ligacoes-uteis/">Ligações Úteis</a>
                    <a href="/about">Sobre</a>
                </div>
            </div>
        </div>
    </body>
</html>
