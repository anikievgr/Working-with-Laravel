@extends('../userPage/app')
@if($items->isEmpty())
     @section('navBar-tag')
        <nav class="navbar navbar-default default solid">
            @endsection
@endif
@section('activpage')
                        <li class="current">
                        <a href="/">О нас</a>
                    </li>
                    <li class="">
                        <a href="/incubirovanie">Инкубирование</a>
                    </li>
                    <li class="">
                        <a href="/contact">Контакты</a>
                    </li>
     @endsection
@section('content')

                @if(!$items->isEmpty())
                    <div class="tp-fullscreen-container revolution">
        <div class="tp-fullscreen">
            <ul>
                  @foreach ($items as $item)
                        <li data-transition="fade"> <img src="{{asset('/storage/'.$item['image'])}}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                            <div class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">{{$item['title']}}<br />
                            </div>
                            <div class="tp-caption medium sfr" data-x="30" data-y="403" data-speed="900" data-start="1500" data-easing="Sine.easeOut">{{$item['subtitle']}}</div>
                            <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="/contact" class="btn btn-large">Связаться</a></div>
                            </li>
                    @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.tp-fullscreen-container -->
    </div><!-- /.revolution -->
                @endif
    <div class="container inner">
        <div class="headline text-center">
            <h2>Первоклассные индюшки и индюшачьи яйца!</h2>
            <p class="lead animated-text letters type">
                <span>Мы занимаемся распространением</span>
                <span class="animated-text-wrapper">
  <b class="is-hidden" style="opacity: 1;"><i class="out">с</i><i class="out">у</i><i class="out">т</i><i class="out">о</i><i class="out">ч</i><i class="out">н</i><i class="out">ы</i><i class="out">х</i><i class="out"> </i><i class="out">и</i><i class="out">н</i><i class="out">д</i><i class="out">ю</i><i class="out">ш</i><i class="out">а</i><i class="out">т</i></b>
 <b style="opacity: 1;" class="is-hidden"><i class="out">и</i><i class="out">н</i><i class="out">к</i><i class="out">у</i><i class="out">б</i><i class="out">а</i><i class="out">ц</i><i class="out">и</i><i class="out">о</i><i class="out">н</i><i class="out">н</i><i class="out">ы</i><i class="out">х</i><i class="out"> </i><i class="out">я</i><i class="out">и</i><i class="out">ц</i></b>
  </span>
            </p>
        </div>
        <div class="divide30"></div>
        <div class="row services">
            <div class="col-sm-6">
                <div class="service">
                    <h4 style="text-align: center;">СУТОЧНЫЕ ИНДЮШАТА</h4>
                    <p style="text-align: center;">Разведение индеек аналогично разведению другой домашней птицы. Однако суточные индюшата более требовательны к температуре окружающей среды (после вылупления температура окружающей среды должна быть 36 °C) и к общему уходу. Они особенно чувствительны к переохлаждению и повышенной влажности.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="service">
                    <h4 style="text-align: center;">ИНКУБАЦИОННЫЕ ЯЙЦА ИНДЕЙКИ</h4>
                    <p style="text-align: center;">Яйца индейки похожи по составу на куриные яйца, а также имеют схожий вкус. Яйца обычно кремово-коричневого цвета с темно-коричневыми пятнами весом около 70-90 г.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- /.light-wrapper -->

    <div class="inverse-wrapper inner bp0">
        <div class="container">
            <div class="thin text-center">
                <div class="headline text-center">
                    <h2>ЛУЧШЕ ОДИН РАЗ УВИДЕТЬ, ЧЕМ СТО РАЗ УСЛЫШАТЬ</h2>
                    <p class="lead">Приходите к нам на экскурсию</p>
                </div>
                <!-- /.headline -->
                <div class="divide30"></div>
                <figure>
                    <img style="width: auto;" src="style/images/art/branko.png" alt="" />
                </figure>
            </div>
            <!-- /.thin -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.inverse-wrapper -->
@if ($gallerea  != [])


    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Галлерея</h3>
            </div>
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-filter-container text-center">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Все </div>
                     @foreach ($gallerea as $key=> $item)
                      <div data-filter="#a{{$item['id']}}" class="cbp-filter-item"> {{$key}}</div>
                     @endforeach
                </div>
                <div id="grid-container" class="cbp">
                        @foreach ($gallerea as $item)
                            @foreach ($item['image']  as $key=> $image)
                                <div class="cbp-item " id="a{{$item['id']}}" > <a class="cbp-caption fancybox-media" data-rel="portfolio" href="{{asset('/storage/'.$image)}}">
                                        <div class="cbp-caption-defaultWrap"> <img src="{{asset('/storage/'.$image)}}" alt="" /> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Увеличить</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.cbp-caption-activeWrap -->
                                    </a>
                                    <!--/.box -->
                                </div>
                            @endforeach
                        @endforeach
                    {{-- <div class="cbp-item provision"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p4.jpg">
                            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p4.jpg" alt="" /> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Увеличить</div>
                                    </div>
                                </div>
                            </div>
                            <!--/.cbp-caption-activeWrap -->
                        </a>
                        <!--/.box -->
                    </div> --}}



                </div>
                <!--/.cbp -->
                <div class="divide30"></div>

                <!--/.text-center -->
            </div>
            <!--/.cbp-panel -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->
@endif


    <div class="outer-wrap inverse-wrapper">
        <div id="video-wrap" class="video-wrap">
            <video preload="metadata" playsinline autoplay muted loop id="video-office">
                <source src="style/userPage/video/video.mp4" type="video/mp4">
                <source src="style/userPage/video/video.webm" type="video/webm">
            </video>
            <div class="content-overlay container">
                <div class="headline text-center">
                    <h2>ШИРОКОГРУДАЯ БРОНЗОВАЯ ИНДЕЙКА
                        </h2>
                    <p class="lead"> Индейки острова Пихты </p>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.video-wrap -->
    </div>
    <!-- /.inverse-wrapper -->

                    <div class="light-wrapper">
                        <div class="container inner">
                            <div class="section-title text-center">
                                <h3>Timeline Blog</h3>
                                <p class="lead">display your journal entries in a timeline fashion</p>
                            </div>
                            <div class="timeline">
                                <div class="date-title"> <span>March 2015</span> </div>
                                <div class="row">
                                    <div class="col-sm-6 timeline-item">
                                        <div class="arrow"></div>
                                        <div class="post-content">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-5">
                                                    <figure><a href="#">
                                                            <div class="text-overlay">
                                                                <div class="info"><span>Read More</span></div>
                                                            </div>
                                                            <img src="style/images/art/tb1.jpg" alt="" /></a></figure>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-sm-9 col-md-7">
                                                    <h4 class="post-title"><a href="#">Curabitur Blandit Tempus</a></h4>
                                                    <div class="meta"><span class="date"><a href="#" class="link-effect">28 May 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                                <!-- /column -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-sm-6 timeline-item right">
                                        <div class="arrow"></div>
                                        <div class="post-content">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-5">
                                                    <figure><a href="#">
                                                            <div class="text-overlay">
                                                                <div class="info"><span>Read More</span></div>
                                                            </div>
                                                            <img src="style/images/art/tb2.jpg" alt="" /></a></figure>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-sm-9 col-md-7">
                                                    <h4 class="post-title"><a href="#">Mollis Euismod Fringilla</a></h4>
                                                    <div class="meta"><span class="date"><a href="#" class="link-effect">22 March 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                                <!-- /column -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                                <div class="date-title"> <span>February 2015</span> </div>
                                <div class="row">
                                    <div class="col-sm-6 timeline-item">
                                        <div class="arrow"></div>
                                        <div class="post-content">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-5">
                                                    <figure><a href="#">
                                                            <div class="text-overlay">
                                                                <div class="info"><span>Read More</span></div>
                                                            </div>
                                                            <img src="style/images/art/tb5.jpg" alt="" /></a></figure>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-sm-9 col-md-7">
                                                    <h4 class="post-title"><a href="#">Dapibus Quam Ligula</a></h4>
                                                    <div class="meta"><span class="date"><a href="#" class="link-effect">11 Februay 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                                <!-- /column -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-sm-6 timeline-item right">
                                        <div class="arrow"></div>
                                        <div class="post-content">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-5">
                                                    <figure><a href="#">
                                                            <div class="text-overlay">
                                                                <div class="info"><span>Read More</span></div>
                                                            </div>
                                                            <img src="style/images/art/tb6.jpg" alt="" /></a></figure>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-sm-9 col-md-7">
                                                    <h4 class="post-title"><a href="#">Fusce Malesuada Cursus</a></h4>
                                                    <div class="meta"><span class="date"><a href="#" class="link-effect">3 February 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                                <!-- /column -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.timeline -->
                        </div>
                        <!-- /.container -->

                    </div>
    <!-- /.light-wrapper -->
    <div class="white-wrapper">
        <div class="col-image">
            <div class="bg-wrapper col-md-6">
                <div class="bg-holder" style="background-image: url({{asset('style/images/art/pp1.jpg')}});"></div>
            </div>
            <!--/.bg-wrapper -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7 inner-col">
                        <div class="divide20"></div>
                        <h3>О КОМПАНИИ</h3>
                        <p>Мы постоянно расширяемся</p>
                        <p>Чешская Республика, Польша и Венгрия - наши давние и стабильные партнеры. Другие наши клиенты находятся в Италии, Германии, Австрии, Нидерландах, Словении, Румынии, Литве, Франции, Хорватии, России и Украине</p>
                        <div class="text-center" width="450px" height="450px">
                            <canvas id="doughnutChart" ></canvas>
                        </div>
                    </div>
                    <!-- /column -->

                    <!-- /.progress-list -->
                    <script>
                        /*-----------------------------------------------------------------------------------*/
                        /*	CHARTS
                        /*-----------------------------------------------------------------------------------*/



                        var doughnutData = [{
                            value: 90,
                            color: "rgba(106,186,222,0.85)",
                            highlight: "rgba(106,186,222,1)",
                            label: "Словакия"
                        }, {
                            value: 10,
                            color: "rgba(241,189,105,0.85)",
                            highlight: "rgba(241,189,105,1)",
                            label: "Другие страны"
                        }];
                        window.onload = function() {
                            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
                            window.myDoughnut = new Chart(ctx4).Doughnut(doughnutData, {
                                responsive: true,
                                scaleFontFamily: "'Lato', sans-serif",
                                tooltipFontFamily: "'Lato', sans-serif",
                                tooltipTitleFontFamily: "'Lato', sans-serif"
                            });
                        };
                    </script>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container -->
        </div>
        <!--/.col-image -->

    </div>

    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Модель процессов</h3>
                <p class="lead">Наш процесс разведения потрясающих индюшек</p>
            </div>
            <div class="thin3">
                <div class="row circle-wrapper">
                    <div class="col-sm-6 col-md-3">
                        <div class="circle blue-bg">
                            <div class="text">1. Материал</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle red-bg">
                            <div class="text">2. Контроль</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle green-bg">
                            <div class="text">3. Забота</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle yellow-bg">
                            <div class="text">4. Развитие</div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
                <div class="divide30"></div>
                <p class="text-center">Наши люди - это высококвалифицированные рабочие с многолетним опытом, являющиеся специалистами в своей отрасли. Мы также работаем и с внешними специалистами. Мы участвуем в сельскохозяйственных и продовольственных ярмарках на словацком и международном рынках.</p>
            </div>
            <!--/.thin -->
        </div>
        <!--/.container -->
    </div>
    <!-- /.light-wrapper -->





     @endsection
