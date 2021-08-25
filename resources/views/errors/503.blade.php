<!DOCTYPE html>
<html>
    <head>
        <title>{{config('app.name')}} Coming Soon</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-family: 'Raleway', sans-serif;
                color: white;
                font-size: 25px;
            }

            .bgimg {
                background-image: url('{{asset('assets/images/under_construction.gif')}}');
                filter: blur(8px);
                -webkit-filter: blur(8px);
                background-position: center;
                background-size: cover;
                position: absolute;
                height: 100vh;
                width: 100vw;
            }

            .topleft {
                position: absolute;
                top: 0;
                left: 16px;
            }

            .bottomleft {
                position: absolute;
                bottom: 0;
                left: 16px;
            }

            .middle {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            hr {
                margin: auto;
                width: 40%;
            }
            .overlay{
                position: absolute;
                background-color: rgba(12, 84, 96, 0.8);
                height: 100vh;
                width: 100vw;
            }
        </style>
    </head>
    <body>
        <div class="bgimg"> </div>
        <div class="overlay"> </div>
        <div class="topleft">
            <img style="margin: 20px" src="{{asset('assets/images/evsun.png')}}" alt="">
        </div>
        <div class="middle">
            <h1>COMING SOON</h1>
            <hr>
            <p>{{\Carbon\Carbon::parse('31.08.2021')->locale('en')->diffForHumans()}}</p>
        </div>
        <div class="bottomleft">
            <h2>EvSun</h2>
        </div>
    </body>
</html>
