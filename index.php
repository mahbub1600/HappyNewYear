<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'> </script>
    <style>
        .details{
            position: absolute;
            bottom:15px;
            background-color: white;
            padding: 5px;
            right:8px;
        }
        body {
            font-family: 'Wendy One', sans-serif;
        }
        /*body {*/
            /*background-color: #000000;*/
            /*margin: 0px;*/
            /*overflow: hidden;*/
        /*}*/
        span {
            text-transform: uppercase;
        }
        * {
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: small;
        }

        .popup {
            width: 100px;
            height: 100px;
            background: #ffffff;
            border-radius: 100px/100px;
            -webkit-border-radius: 100px 100px;
            -moz-border-radius: 100px/100px;
            position: absolute;
            top: 40px;
            left: 240px;
            border:1px solid black;
            text-align: center;
            cursor: crosshair;
            behavior: url(PIE.htc); //using css3pie for IE http://css3pie.com
        }
        .popup:hover{
            z-index: 9999;
        }

        li.done {
            text-decoration: line-through;
        }

        .container {
            width: 800px;
            height: 620px;
            padding: 10px;
            margin: 0 auto;
            background: #fff;
            position: relative;
        }

        .hide {
            display: none;
        }
        .balloon {
            width: 738px;
            margin: 0 auto;
            padding-top: 30px;
            position: relative;
        }
        .balloon > div {
            width: 104px;
            height: 140px;
            background: rgba(182, 15, 97, 0.9);
            border-radius: 0;
            border-radius: 80% 80% 80% 80%;
            margin: 0 auto;
            position: absolute;
            padding: 10px;
            box-shadow: inset 17px 7px 10px rgba(182, 15, 97, 0.9);;
            -webkit-transform-origin: bottom center;
        }
        .hidden-div > div{
            width: 78px;
            height: 105px;
        }

        .balloon > div:nth-child(1) {
            background: rgba(32, 125, 197, 0.9);;
            left: 120;
            box-shadow: inset 10px 10px 10px darken(rgba(182, 15, 97, 0.9);, 10 %);
            -webkit-animation: balloon1 6s ease-in-out infinite;
            -moz-animation: balloon1 6s ease-in-out infinite;
            -o-animation: balloon1 6s ease-in-out infinite;
            animation: balloon1 6s ease-in-out infinite;

        &
        :before {
            color: rgba(182, 15, 97, 0.9);;
        }

        }
        .hidden-div > div:nth-child(1) {
            background: rgba(182, 15, 97, 0.9);;
            left: 0;
            box-shadow: inset 10px 10px 10px darken(rgba(182, 15, 97, 0.9);, 10 %);
            -webkit-animation: balloon1 6s ease-in-out infinite;
            -moz-animation: balloon1 6s ease-in-out infinite;
            -o-animation: balloon1 6s ease-in-out infinite;
            animation: balloon1 6s ease-in-out infinite;

        &
        :before {
            color: rgba(182, 15, 97, 0.9);;
        }

        }
        .balloon > div:nth-child(2) {
            background: rgba(122, 222, 14, 0.9);
            left: 190px;
            box-shadow: inset 10px 10px 10px darken(rgba(242, 112, 45, 0.9), 10%);
            -webkit-animation: balloon2 6s ease-in-out infinite;
            -moz-animation: balloon2 6s ease-in-out infinite;
            -o-animation: balloon2 6s ease-in-out infinite;
            animation: balloon2 6s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 112, 45, 0.9);
        }

        }
        .hidden-div > div:nth-child(2) {
            background: rgba(242, 112, 45, 0.9);
            left: 120px;
            box-shadow: inset 10px 10px 10px darken(rgba(242, 112, 45, 0.9), 10%);
            -webkit-animation: balloon2 6s ease-in-out infinite;
            -moz-animation: balloon2 6s ease-in-out infinite;
            -o-animation: balloon2 6s ease-in-out infinite;
            animation: balloon2 6s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 112, 45, 0.9);
        }

        }
        .balloon > div:nth-child(3) {
            background: rgba(45, 181, 167, 0.9);
            left: 260px;
            box-shadow: inset 10px 10px 10px darken(rgba(45, 181, 167, 0.9), 10%);
            -webkit-animation: balloon4 6s ease-in-out infinite;
            -moz-animation: balloon4 6s ease-in-out infinite;
            -o-animation: balloon4 6s ease-in-out infinite;
            animation: balloon4 6s ease-in-out infinite;

        &
        :before {
            color: rgba(45, 181, 167, 0.9);
        }

        }
        .hidden-div > div:nth-child(3) {
            background: rgba(45, 181, 167, 0.9);
            left: 240px;
            box-shadow: inset 10px 10px 10px darken(rgba(45, 181, 167, 0.9), 10%);
            -webkit-animation: balloon4 6s ease-in-out infinite;
            -moz-animation: balloon4 6s ease-in-out infinite;
            -o-animation: balloon4 6s ease-in-out infinite;
            animation: balloon4 6s ease-in-out infinite;

        &
        :before {
            color: rgba(45, 181, 167, 0.9);
        }

        }
        .balloon > div:nth-child(4) {
            background: rgba(190, 61, 244, 0.9);
            left: 330px;
            box-shadow: inset 10px 10px 10px darken(rgba(190, 61, 244, 0.9), 10%);
            -webkit-animation: balloon1 5s ease-in-out infinite;
            -moz-animation: balloon1 5s ease-in-out infinite;
            -o-animation: balloon1 5s ease-in-out infinite;
            animation: balloon1 5s ease-in-out infinite;

        &
        :before {
            color: rgba(190, 61, 244, 0.9);
        }

        }
        .hidden-div > div:nth-child(4) {
            background: rgba(190, 61, 244, 0.9);
            left: 360px;
            box-shadow: inset 10px 10px 10px darken(rgba(190, 61, 244, 0.9), 10%);
            -webkit-animation: balloon3 5s ease-in-out infinite;
            -moz-animation: balloon3 5s ease-in-out infinite;
            -o-animation: balloon3 5s ease-in-out infinite;
            animation: balloon3 5s ease-in-out infinite;

        &
        :before {
            color: rgba(190, 61, 244, 0.9);
        }

        }
        .balloon > div:nth-child(5) {
            background: rgba(180, 224, 67, 0.9);
            left: 410px;
            box-shadow: inset 10px 10px 10px darken(rgba(180, 224, 67, 0.9), 10%);
            -webkit-animation: balloon3 5s ease-in-out infinite;
            -moz-animation: balloon3 5s ease-in-out infinite;
            -o-animation: balloon3 5s ease-in-out infinite;
            animation: balloon3 5s ease-in-out infinite;

        &
        :before {
            color: rgba(180, 224, 67, 0.9);
        }

        }
        .hidden-div > div:nth-child(5) {
            background: rgba(180, 224, 67, 0.9);
            left: 480px;
            box-shadow: inset 10px 10px 10px darken(rgba(180, 224, 67, 0.9), 10%);
            -webkit-animation: balloon1 5s ease-in-out infinite;
            -moz-animation: balloon1 5s ease-in-out infinite;
            -o-animation: balloon1 5s ease-in-out infinite;
            animation: balloon1 5s ease-in-out infinite;

        &
        :before {
            color: rgba(180, 224, 67, 0.9);
        }

        }
        .balloon > div:nth-child(6) {
            background: rgba(252, 104, 58, 0.9);
            left: 490px;
            box-shadow: inset 10px 10px 10px darken(rgba(242, 194, 58, 0.9), 10%);
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;
            animation: balloon2 3s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(6) {
            background: rgba(242, 194, 58, 0.9);
            left: 600px;
            box-shadow: inset 10px 10px 10px darken(rgba(242, 194, 58, 0.9), 10%);
            -webkit-animation: balloon2 2s ease-in-out infinite;
            -moz-animation: balloon2 2s ease-in-out infinite;
            -o-animation: balloon2 2s ease-in-out infinite;
            animation: balloon2 2s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .balloon > div:nth-child(7) {
            background: rgba(242, 0, 58, 0.9);
            left: 180px;
            top: 100px;
            box-shadow: inset 10px 10px 10px darken(rgba(242, 0, 58, 0.9), 10%);
            animation: balloon4 3s ease-in-out infinite;
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(7) {
            background: rgba(242, 0, 58, 0.9);
            left: 210px;
            top: 130px;
            box-shadow: inset 10px 10px 10px darken(rgba(242, 0, 58, 0.9), 10%);
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;
            animation: balloon4 3s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .balloon > div:nth-child(8) {
            background: rgba(0, 194, 58, 0.9);
            left: 360px;
            top: 140px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon3 4s ease-in-out infinite;
            -webkit-animation: balloon2 4s ease-in-out infinite;
            -moz-animation: balloon2 4s ease-in-out infinite;
            -o-animation: balloon2 4s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(8) {
            background: rgba(40, 194, 58, 0.9);
            left: 330px;
            top: 130px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;
            animation: balloon3 2s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .balloon > div:nth-child(9) {
            background: rgba(240, 65, 161, 0.9);
            left: 440px;
            top: 100px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon5 5s ease-in-out infinite;
            -webkit-animation: balloon2 5s ease-in-out infinite;
            -moz-animation: balloon2 5s ease-in-out infinite;
            -o-animation: balloon2 5s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(9) {
            background: rgba(0, 15, 131, 0.9);
            left: 440px;
            top: 130px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon2 3s ease-in-out infinite;
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .balloon > div:nth-child(10) {
            background: rgba(10, 15, 231, 0.9);
            left: 250px;
            top: 140px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon2 6s ease-in-out infinite;
            -webkit-animation: balloon2 6s ease-in-out infinite;
            -moz-animation: balloon2 6s ease-in-out infinite;
            -o-animation: balloon2 6s ease-in-out infinite;
        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(10) {
            background: rgba(0, 194, 58, 0.9);
            left: 120px;
            top: 240px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;
            animation: balloon2 6s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(11) {
            background: rgba(30, 14, 58, 0.9);
            left: 240px;
            top: 240px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon3 3s ease-in-out infinite;
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(12) {
            background: rgba(60, 94, 258, 0.9);
            left: 360px;
            top: 240px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon2 4s ease-in-out infinite;
            -webkit-animation: balloon2 4s ease-in-out infinite;
            -moz-animation: balloon2 4s ease-in-out infinite;
            -o-animation: balloon2 4s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(13) {
            background: rgba(240, 14, 158, 0.9);
            left: 480px;
            top: 240px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon5 5s ease-in-out infinite;
            -webkit-animation: balloon2 5s ease-in-out infinite;
            -moz-animation: balloon2 5s ease-in-out infinite;
            -o-animation: balloon2 5s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(14) {
            background: rgba(150, 154, 158, 0.9);
            left: 610px;
            top: 240px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon6 6s ease-in-out infinite;
            -webkit-animation: balloon2 6s ease-in-out infinite;
            -moz-animation: balloon2 6s ease-in-out infinite;
            -o-animation: balloon2 6s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(15) {
            background: rgba(150, 154, 158, 0.9);
            left: 150px;
            top: 360px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon6 7s ease-in-out infinite;
            -webkit-animation: balloon2 7s ease-in-out infinite;
            -moz-animation: balloon2 7s ease-in-out infinite;
            -o-animation: balloon2 7s ease-in-out infinite;

        &
        :before {
            color: rgba(100, 104, 100, 0.9);
        }

        }
        .hidden-div > div:nth-child(16) {
            background: rgba(50, 54, 250, 0.9);
            left: 250px;
            top: 360px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon6 3s ease-in-out infinite;
            -webkit-animation: balloon2 3s ease-in-out infinite;
            -moz-animation: balloon2 3s ease-in-out infinite;
            -o-animation: balloon2 3s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(17) {
            background: rgba(50, 254, 58, 0.9);
            left: 350px;
            top: 360px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon6 2s ease-in-out infinite;
            -webkit-animation: balloon2 2s ease-in-out infinite;
            -moz-animation: balloon2 2s ease-in-out infinite;
            -o-animation: balloon2 2s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .hidden-div > div:nth-child(18) {
            background: rgba(250, 54, 58, 0.9);
            left: 450px;
            top: 360px;
            box-shadow: inset 10px 10px 10px darken(rgba(0, 194, 58, 0.9), 10%);
            animation: balloon6 1s ease-in-out infinite;
            -webkit-animation: balloon2 1s ease-in-out infinite;
            -moz-animation: balloon2 1s ease-in-out infinite;
            -o-animation: balloon2 1s ease-in-out infinite;

        &
        :before {
            color: rgba(242, 194, 58, 0.9);
        }

        }
        .footer {
            position: relative;
            top: 500px;
            text-align: center;
            color: rgba(182, 15, 97, 0.9);;
            font-size: 3.5em;
        }

        .balloon > div:before {
            color: rgba(182, 15, 97, 0.9);;
            position: absolute;
            bottom: -11px;
            left: 52px;
            content: "▲";
            font-size: 1em;
        }

        span {
            font-size: 4.8em;
            color: white;
            position: relative;
            top: 30px;
            left: 50%;
            margin-left: -27px;
        }

        /*BALLOON 1 4*/
        @-webkit-keyframes balloon1 {
            0%, 100% {
                -webkit-transform: translateY(0) rotate(-6deg);
            }
            50% {
                -webkit-transform: translateY(-20px) rotate(8deg);
            }
        }

        @-moz-keyframes balloon1 {
            0%, 100% {
                -moz-transform: translateY(0) rotate(-6deg);
            }
            50% {
                -moz-transform: translateY(-20px) rotate(8deg);
            }
        }

        @-o-keyframes balloon1 {
            0%, 100% {
                -o-transform: translateY(0) rotate(-6deg);
            }
            50% {
                -o-transform: translateY(-20px) rotate(8deg);
            }
        }

        @keyframes balloon1 {
            0%, 100% {
                transform: translateY(0) rotate(-6deg);
            }
            50% {
                transform: translateY(-20px) rotate(8deg);
            }
        }

        /* BAllOON 2 5*/
        @-webkit-keyframes balloon2 {
            0%, 100% {
                -webkit-transform: translateY(0) rotate(6 eg);
            }
            50% {
                -webkit-transform: translateY(-30px) rotate(-8deg);
            }
        }

        @-moz-keyframes balloon2 {
            0%, 100% {
                -moz-transform: translateY(0) rotate(6deg);
            }
            50% {
                -moz-transform: translateY(-30px) rotate(-8deg);
            }
        }

        @-o-keyframes balloon2 {
            0%, 100% {
                -o-transform: translateY(0) rotate(6deg);
            }
            50% {
                -o-transform: translateY(-30px) rotate(-8deg);
            }
        }

        @keyframes balloon2 {
            0%, 100% {
                transform: translateY(0) rotate(6deg);
            }
            50% {
                transform: translateY(-30px) rotate(-8deg);
            }
        }

        /* BAllOON 0*/
        @-webkit-keyframes balloon3 {
            0%, 100% {
                -webkit-transform: translate(0, -10px) rotate(6 eg);
            }
            50% {
                -webkit-transform: translate(-20px, 30px) rotate(-8deg);
            }
        }

        @-moz-keyframes balloon3 {
            0%, 100% {
                -moz-transform: translate(0, -10px) rotate(6 eg);
            }
            50% {
                -moz-transform: translate(-20px, 30px) rotate(-8deg);
            }
        }

        @-o-keyframes balloon3 {
            0%, 100% {
                -o-transform: translate(0, -10px) rotate(6 eg);
            }
            50% {
                -o-transform: translate(-20px, 30px) rotate(-8deg);
            }
        }

        @keyframes balloon3 {
            0%, 100% {
                transform: translate(0, -10px) rotate(6 eg);
            }
            50% {
                transform: translate(-20px, 30px) rotate(-8deg);
            }
        }

        /* BAllOON 3*/
        @-webkit-keyframes balloon4 {
            0%, 100% {
                -webkit-transform: translate(10px, -10px) rotate(-8 eg);
            }
            50% {
                -webkit-transform: translate(-15px, 20px) rotate(10deg);
            }
        }

        @-moz-keyframes balloon4 {
            0%, 100% {
                -moz-transform: translate(10px, -10px) rotate(-8 eg);
            }
            50% {
                -moz-transform: translate(-15px, 10px) rotate(10deg);
            }
        }

        @-o-keyframes balloon4 {
            0%, 100% {
                -o-transform: translate(10px, -10px) rotate(-8 eg);
            }
            50% {
                -o-transform: translate(-15px, 10px) rotate(10deg);
            }
        }

        @keyframes balloon4 {
            0%, 100% {
                transform: translate(10px, -10px) rotate(-8 eg);
            }
            50% {
                transform: translate(-15px, 10px) rotate(10deg);
            }
        }

        h1 {
            position: relative;
            top: 200px;
            text-align: center;
            color: rgba(182, 15, 97, 0.9);;
            font-size: 3.5em;
        }
        canvas { position: absolute; top: 0px; left: 0px;
        z-index: 9;}
        .container { position: absolute;
        top: -8px;
            left: -8px;
            z-index:10;
        width: 100%;
        height: 100% !important;}
        body { overflow: hidden}
    </style>
    <title>Happy New Year - 2020</title>
    <meta charset="UTF-8">
    <meta name="description" content="Wishing you a new year for 2020, Happy New Year 2020. Enjoy and share happiness throughout the world">
    <meta name="keywords" content="Happy,New,Year,Happy New Year,2020,Happy2020, New Year Wish, New Year 2020, New Year 2020 Wish">
    <meta name="author" content="Mahbub Alam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<script>
    var SCREEN_WIDTH = window.innerWidth,
        SCREEN_HEIGHT = window.innerHeight,
        mousePos = {
            x: 400,
            y: 300
        },

    // create canvas
        canvas = document.createElement('canvas'),
        context = canvas.getContext('2d'),
        particles = [],
        rockets = [],
        MAX_PARTICLES = 400,
        colorCode = 0;

    // init
    $(document).ready(function() {
        document.body.appendChild(canvas);
        canvas.width = SCREEN_WIDTH;
        canvas.height = SCREEN_HEIGHT;
        setInterval(launch, 800);
        setInterval(loop, 1000 / 50);
    });

    // update mouse position
    $(document).mousemove(function(e) {
        e.preventDefault();
        mousePos = {
            x: e.clientX,
            y: e.clientY
        };
    });

    // launch more rockets!!!
    $(document).mousedown(function(e) {
        for (var i = 0; i < 5; i++) {
            launchFrom(Math.random() * SCREEN_WIDTH * 2 / 3 + SCREEN_WIDTH / 6);
        }
    });

    function launch() {
        launchFrom(mousePos.x);
    }

    function launchFrom(x) {
        if (rockets.length < 10) {
            var rocket = new Rocket(x);
            rocket.explosionColor = Math.floor(Math.random() * 360 / 10) * 10;
            rocket.vel.y = Math.random() * -3 - 4;
            rocket.vel.x = Math.random() * 6 - 3;
            rocket.size = 8;
            rocket.shrink = 0.999;
            rocket.gravity = 0.01;
            rockets.push(rocket);
        }
    }

    function loop() {
        // update screen size
        if (SCREEN_WIDTH != window.innerWidth) {
            canvas.width = SCREEN_WIDTH = window.innerWidth;
        }
        if (SCREEN_HEIGHT != window.innerHeight) {
            canvas.height = SCREEN_HEIGHT = window.innerHeight;
        }

        // clear canvas
        context.fillStyle = "rgba(0, 0, 0, 0.05)";
        context.fillRect(0, 0, SCREEN_WIDTH, SCREEN_HEIGHT);

        var existingRockets = [];

        for (var i = 0; i < rockets.length; i++) {
            // update and render
            rockets[i].update();
            rockets[i].render(context);

            // calculate distance with Pythagoras
            var distance = Math.sqrt(Math.pow(mousePos.x - rockets[i].pos.x, 2) + Math.pow(mousePos.y - rockets[i].pos.y, 2));

            // random chance of 1% if rockets is above the middle
            var randomChance = rockets[i].pos.y < (SCREEN_HEIGHT * 2 / 3) ? (Math.random() * 100 <= 1) : false;

            /* Explosion rules
             - 80% of screen
             - going down
             - close to the mouse
             - 1% chance of random explosion
             */
            if (rockets[i].pos.y < SCREEN_HEIGHT / 5 || rockets[i].vel.y >= 0 || distance < 50 || randomChance) {
                rockets[i].explode();
            } else {
                existingRockets.push(rockets[i]);
            }
        }

        rockets = existingRockets;

        var existingParticles = [];

        for (var i = 0; i < particles.length; i++) {
            particles[i].update();

            // render and save particles that can be rendered
            if (particles[i].exists()) {
                particles[i].render(context);
                existingParticles.push(particles[i]);
            }
        }

        // update array with existing particles - old particles should be garbage collected
        particles = existingParticles;

        while (particles.length > MAX_PARTICLES) {
            particles.shift();
        }
    }

    function Particle(pos) {
        this.pos = {
            x: pos ? pos.x : 0,
            y: pos ? pos.y : 0
        };
        this.vel = {
            x: 0,
            y: 0
        };
        this.shrink = .97;
        this.size = 2;

        this.resistance = 1;
        this.gravity = 0;

        this.flick = false;

        this.alpha = 1;
        this.fade = 0;
        this.color = 0;
    }

    Particle.prototype.update = function() {
        // apply resistance
        this.vel.x *= this.resistance;
        this.vel.y *= this.resistance;

        // gravity down
        this.vel.y += this.gravity;

        // update position based on speed
        this.pos.x += this.vel.x;
        this.pos.y += this.vel.y;

        // shrink
        this.size *= this.shrink;

        // fade out
        this.alpha -= this.fade;
    };

    Particle.prototype.render = function(c) {
        if (!this.exists()) {
            return;
        }

        c.save();

        c.globalCompositeOperation = 'lighter';

        var x = this.pos.x,
            y = this.pos.y,
            r = this.size / 2;

        var gradient = c.createRadialGradient(x, y, 0.1, x, y, r);
        gradient.addColorStop(0.1, "rgba(255,255,255," + this.alpha + ")");
        gradient.addColorStop(0.8, "hsla(" + this.color + ", 100%, 50%, " + this.alpha + ")");
        gradient.addColorStop(1, "hsla(" + this.color + ", 100%, 50%, 0.1)");

        c.fillStyle = gradient;

        c.beginPath();
        c.arc(this.pos.x, this.pos.y, this.flick ? Math.random() * this.size : this.size, 0, Math.PI * 2, true);
        c.closePath();
        c.fill();

        c.restore();
    };

    Particle.prototype.exists = function() {
        return this.alpha >= 0.1 && this.size >= 1;
    };

    function Rocket(x) {
        Particle.apply(this, [{
            x: x,
            y: SCREEN_HEIGHT}]);

        this.explosionColor = 0;
    }

    Rocket.prototype = new Particle();
    Rocket.prototype.constructor = Rocket;

    Rocket.prototype.explode = function() {
        var count = Math.random() * 10 + 80;

        for (var i = 0; i < count; i++) {
            var particle = new Particle(this.pos);
            var angle = Math.random() * Math.PI * 2;

            // emulate 3D effect by using cosine and put more particles in the middle
            var speed = Math.cos(Math.random() * Math.PI / 2) * 15;

            particle.vel.x = Math.cos(angle) * speed;
            particle.vel.y = Math.sin(angle) * speed;

            particle.size = 10;

            particle.gravity = 0.2;
            particle.resistance = 0.92;
            particle.shrink = Math.random() * 0.05 + 0.93;

            particle.flick = true;
            particle.color = this.explosionColor;

            particles.push(particle);
        }
    };

    Rocket.prototype.render = function(c) {
        if (!this.exists()) {
            return;
        }

        c.save();

        c.globalCompositeOperation = 'lighter';

        var x = this.pos.x,
            y = this.pos.y,
            r = this.size / 2;

        var gradient = c.createRadialGradient(x, y, 0.1, x, y, r);
        gradient.addColorStop(0.1, "rgba(255, 255, 255 ," + this.alpha + ")");
        gradient.addColorStop(1, "rgba(0, 0, 0, " + this.alpha + ")");

        c.fillStyle = gradient;

        c.beginPath();
        c.arc(this.pos.x, this.pos.y, this.flick ? Math.random() * this.size / 2 + this.size / 2 : this.size, 0, Math.PI * 2, true);
        c.closePath();
        c.fill();

        c.restore();
    };
</script>
<div class="container">
    <div class="balloon shown-div">
<!--        <div><span>☺</span></div>-->
        <br>
        <br>
        <br>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <div class="popup"><span></span></div>
        <!--    <div><span>A</span></div>-->
        <!--    <div><span>R</span></div>-->
        <!--    <div><span>!</span></div>-->
    </div>
    <div class="balloon hidden-div hide">
        <br>
        <br>
        <br>
        <div><span>☺</span></div>
        <div><span>H</span></div>
        <div><span>A</span></div>
        <div><span>P</span></div>
        <div><span>P</span></div>
        <div><span>Y</span></div>
        <div><span>N</span></div>
        <div><span>E</span></div>
        <div><span>W</span></div>
        <div><span>Y</span></div>
        <div><span>E</span></div>
        <div><span>A</span></div>
        <div><span>R</span></div>
        <div><span>☺</span></div>
        <div><span>2</span></div>
        <div><span>0</span></div>
        <div><span>2</span></div>
        <div><span>0</span></div>
        <!--    <div><span>!</span></div>-->
    </div>
    <div class="footer">
        <ha>Pop up the balloons...</ha>
    </div>
    <div id="details" class="hide details">
        Developed by: <a href="www.facebook.com/mahbub.iit">Mahbub Alam</a> and <a href="www.facebook.com/nurmohammad.zehadi">Nur Mohammad</a>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    var counter = 10;
    $(document).ready(function () {
        $(".popup").click(function () {
            //alert('aleryed');
            var audio = new Audio('popBubble.mp3');
            audio.play();
//            alert('Coun: '+counter);
            if (counter>1) {
                var audio = new Audio(counter + '.mp3');
            } else {
                var audio = new Audio('1.mp3');
                $('.hidden-div').removeClass('hide');
                $('.shown-div').addClass('hide');
                $('.footer').html('Wishing you a happy year');
            }
            audio.play();
            if(counter==1){
                //var audio = new Audio('newYear.mp3');
                //audio.play();
                $('body').css({"background-color": "#000000","overflow":"hidden"});
                $('.container').css({"background": "none"});
                $('#details').removeClass('hide');
                $('.footer').css({"color":"white"});
                /*background-color: #000000;*/
                /*margin: 0px;*/
                /*overflow: hidden;*/
            }
            $(this).hide();
            counter--;
            $(".popup").stop(true, false);

            $(this).hide("explode", {
                pieces: 20
            }, 250);
        });
        $(".popup").mouseout(function () {
            //alert('alerted');
            animate1(this);
        });
        $(".popup").mouseover(function () {
            animate2(this);
//            $(".popup").stop(true, false);
        });
    });

    function animate1(e) {
        $(e).animate({
            "-moz-border-radius": "110px/100px",
            "-webkit-border-radius": "110px 100px",
            "border-radius": "110px/100px",
            top: '40px',
            width: '104px',
            height: '140px',
        }, 1000);
    }
    function animate2(e) {
        $(e).animate({
            "-moz-border-radius": "100px/110px",
            "-webkit-border-radius": "100px 110px",
            "border-radius": "100px/110px",
            width: '135px',
            height: '180px',
            top: '35px',
        }, 1000);
    }
</script>
