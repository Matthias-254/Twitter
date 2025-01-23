<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BetaStar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles / Scripts -->
        <style>
            body{
                font-family: Arial, sans-serif;
                font-size: 1.5rem;
                margin: 0;
                padding: 0;
                background-color: rgb(17, 24, 39);
            }
            #header{
                padding: 30px;
                background-color: rgb(31, 41, 50);
            }
            a{
                background-color: grey;
                color: rgb(229,231, 235);
                text-decoration: none;
                padding: 10px;
                border-radius: 5px;
            }
            footer{
                padding: 5px;
                color: white;
                text-align: center;
                margin-top: 49vh;
                font-size: 1rem;
                height: 6vh;
            }
            nav{
                text-align: right;
                margin-right: 20px;
            }
            #text{
                font-size: 1.5rem;
                color: rgb(229,231, 235);
                text-align: left;
                margin-bottom: -25px;
            }
            main{
                text-align: center;
                font-size: 3rem;
                color: rgb(229,231, 235);
                margin-top: 20vh;
            }
        </style>
    </head>
    <body>
        <header id="header">               
            @if (Route::has('login'))
                <nav id="nav"> 
                <p id="text">BetaStar</p> 
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main>
            <p>Welcome!</p>
        </main>

        <footer>
            <p>&copy;BetaStar {{ date('Y') }}</p>
        </footer>
    </body>
</html>
