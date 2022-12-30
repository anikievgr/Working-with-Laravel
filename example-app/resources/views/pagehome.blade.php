<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootsrap.mini.css')}}" rel="stylesheet" >
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<header >
    <div class="navbar" id="navbar">
    <div class="logo">
        <a href="/">
            <img src="https://brankorus.ru/static/brankorus/images/logo.svg?id=68fc27734aedd4d61633">
        </a>
    </div>
    <ul class="menu-long">
        <li class="items-menu"><a href="/">о нас</a></li>
        <li class="items-menu"><a href="#">инкубирование</a></li>
        <li class="items-menu"><a href="#">контакты</a> </li>
    </ul>
        <div class="menu-smoll">
            <div class="menu-burger" id="menu">
                <div class="burger-icon">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="menu-list"></div>
            </div>
        </div>
    </div>
</header>

<script src=" {{ asset("scripts/pageHome.js") }}"></script>
</body>
</html>
