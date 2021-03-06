<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jelle Traa</title>

        <!-- Icon -->
        <link rel="icon" href="resources/icon/hack.png"/>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css.map" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                overflow:hidden;
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
                display:flex;
                text-align: center;
                flex-direction: column;
                margin-top: 220px;
            }

            .title {
                font-size: 50px;
            }
            .subtitle {
                font-size:30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 80px;
            }

            @media(max-width: 700px) {
                html body{
                    overflow: scroll;
                }
                .links > a {
                color: #636b6f;
                padding: 0 0px 0px;
                font-size: 13px;
                font-weight: 800;
                letter-spacing: .001rem;
                text-decoration: none;
                text-transform: uppercase;
                }
                .title {
                    font-size: 40px;
                    padding-bottom: 10px;
                }
                .subtitle {
                    font-size: 15px;
                    
                }
                .content {
                    margin-top: 50px;
                }
            }
        </style>
    </head>
    <body>

            <div class="content">
                <div class="title">
                    Welcome on the Landing Page of Jelle Traa,</div>
                    <div class="subtitle m-b-md">
                    Below you can see all my projects, my GitHub and a video gallery of my offline projects!
                    </div><br>
                

                <div class="links">
                    
                    
                    <a href="gallery.php">Gallery</a>
                    <a target="_blank" href="http://github.com/jtraa">GitHub</a>
                    <a target="_blank" href="http://booklist.jelletraa.com">Booklist</a>
                    <a target="_blank" href="http://numberguesser.jelletraa.com">Numberguesser</a>
                    <a target="_blank" href="http://loancalculator.jelletraa.com">Loancalculator</a>
                    <a target="_blank" href="http://githubfinder.jelletraa.com">GitHub finder</a> <br>
                    
                    <a target="_blank" href="http://finance.jelletraa.com">ERP-online</a>
                    <a target="_blank" href="http://chuck-norris-joke-generator.jelletraa.com">Joke-generator</a>
                    <a target="_blank" href="http://weather.jelletraa.com">WeatherApplication</a>
                    <a target="_blank" href="http://kalenderweek.jelletraa.com">CalendarApplication</a>
                    <a target="_blank" href="http://meditation.jelletraa.com">MeditationApplication</a>
                    <a target="_blank" href="http://portfolio.jelletraa.com">First Portfolio</a>
                </div>
            </div>
    </body>
</html>
