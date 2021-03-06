<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>G.B.C</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
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
                color: #d1dce2;
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

            .fondo{
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                background-image: url("{{ asset('images/bg.jpg') }}");
               
            }

            .card-img-overlay{
                position: relative;
                font-size: 3em;
                color: white;
                left: calc(40% - 150px );
                top: 49px;
            }

            .principal{
                z-index: 10;
            }
        </style>
      </head>
    <body>
             
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                    <div class="principal top-right links">
                        @auth
                           Usuario Logeado 
                        <a href="{{ url('/notas') }}">G.B.C.</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>


                    @endauth
                    </div>
            @endif
            
            <div class="fondo">
                    <a class="navbar-brand">
                        <img src="images/unnamed.png" width="180" height="140" class="d-inline-block align-top">
                      </a>
                <div class="card-img-overlay">
                    <h5 class="card-title">Gestion de base de conocimiento</h5>
                </div>
            </div>
        </div>
    </body>
</html>
