<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
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
                    Renata Badiali - GU1760882
                </div>

                <div class="links">
                    <p>Este CRUD foi feito em API. As rotas são:</p>
                    <ul>
                        <li>GET: /api/user - mostra todos os usuários</li>
                        <li>
                            POST: /api/user - para criar um usuário é necessário enviar os seguintes dados:
                            <ul>
                                <li>string: name</li>
                                <li>string: email</li>
                                <li>string: password</li>
                            </ul>
                        </li>
                        <li>GET: /api/user/(id) - mostra o usuário correspondente ao id enviado</li>
                        <li>PUT: /api/user/(id) - atualiza o usuário correspondente ao id enviado, recebe os mesmos campos que o POST anterior</li>
                        <li>DELETE: /api/user/(id) - remove o usuário corresponder ao id enviado</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
