@extends('../userPage/app')
@section('activpage')
                        <li class="">
                        <a href="/">О нас</a>
                    </li>
                    <li class="current">
                        <a href="/incubirovanie">Инкубирование</a>
                    </li>
                    <li class="">
                        <a href="/contact">Контакты</a>
                    </li>
     @endsection
@section('content')
            <div class="post-parallax parallax inverse-wrapper parallax3" style="background-image: url({{asset('style/images/art/slider-bg1.jpg')}}">
        <div class="container inner text-center">
            <h2>Инкубирование</h2>

        </div>
    </div>
    <div class="light-wrapper">
        <div class="container inner">
            <div class="thin2">
                <h4 style="text-align: center;">ИНКУБИРОВАНИЕ</h4>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
     @endsection
 

