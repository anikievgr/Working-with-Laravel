<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel = "shortcut icon" href = "style/images/favicon-1.svg" sizes="any" >
    <title>Branko - Контакты</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/color/blue.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="{{asset('style/type/icons.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div class="body-wrapper">
        <nav class="navbar navbar-default default solid">
            <div class="container">
                <div class="navbar-header">
                    <div class="basic-wrapper">
                        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                        <div class="navbar-brand">
                            <a href="https://brankorus.ru" style="position: absolute; top: -18px">
                                <img src="style/images/logo.png" height="50"  class="logo-light" alt="BRANKO">
                                <img src="style/images/logo-dark.png" height="50" class="logo-dark" alt="BRANKO">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="/">О нас</a>
                        </li>
                        <li class="">
                            <a href="/incubirovanie">Инкубирование</a>
                        </li>
                        <li class="current">
                            <a href="/contact">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.container -->
        </nav>

    <div class="offset"></div>
    <div class="white-wrapper">
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2231.388937338009!2d50.44523721530822!3d55.99461538078406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415f23a3073071d9%3A0x741bef279139179!2z0KLQkNCY0KQt0J3QmiDQkNCX0KEg4oSWNzEwICjQotCQ0KLQndCV0KTQotCV0J_QoNCe0JTQo9Ca0KIp!5e0!3m2!1sru!2sru!4v1673074739658!5m2!1sru!2sru" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- /.map-wrapper -->
    </div>

</div>
<!-- /.white-wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="thin">
            <div class="section-title text-center">
                <h3>СВЯЗАТЬСЯ</h3>
                <p class="lead">Не стесняйтесь писать нам</p>
            </div>
            <ul class="contact-info text-center">
                <li><i class="icon-location"></i>422060, респ. Татарстан, пгт. Богатые Сабы, ул. Заводская, д. 19</li>
                <li><i class="icon-phone"></i>+7 927 039 71 17</li>
                <li><i class="icon-mail"></i><a href="mailto:sales@brankorus.ru">sales@brankorus.ru</a></li>
            </ul>
            <div class="divide50"></div>
            <div class="form-container">
                <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="text" name="name" placeholder="Ваше имя" required="required">
                                    <i class="icon-user"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="email" name="email" placeholder="Электронная почта" required="required">
                                    <i class="icon-mail-alt"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="tel" name="tel" placeholder="Телефон">
                                    <i class="icon-phone"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label class="custom-select">
                                    <select name="department" required="required">
                                        <option value="">Выберите тему</option>
                                        <option value="Sales">Сотруднечиство</option>
                                        <option value="Marketing">Поддержка</option>
                                    </select>
                                    <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <textarea name="message" placeholder="Напишите Ваше сообщение сюда..."></textarea>

                    <!--/.radio-set -->
                    <input type="submit" class="btn" value="Отправить" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                    <footer class="notification-box"></footer>
                </form>
                <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->

        </div>
        <!-- /.container -->
    </div>
    <footer class="inverse-wrapper">
        <div class="container inner">

            <div class="row ">
                <div class="col-sm-6">
                    <div class="widget "> <img src="style/images/logo.png "  height="50" data-at2x="style/images/logo@2x.png" alt="" />

                        <p>Более 45 лет занимаемся специальным сектором сельского хозяйства, разведением индейки, распространением инкубационных яиц индейки и суточных индюшат.</p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->



                <div class="col-sm-6">
                    <div class="widget">
                        <h3 class="section-title widget-title">СВЯЗАТЬСЯ</h3>
                        <p>ООО «Бранко Рус»</p>
                        <div class="contact-info"> <i class="icon-location"></i> 422060, респ. Татарстан, пгт. Богатые Сабы,ул. Заводская, д. 19 <br />
                            <i class="icon-phone"></i>+7 927 039 71 17 <br />
                            <i class="icon-mail"></i> <a href="mailto:sales@brankorus.ru">sales@brankorus.ru</a></a> </div>
                    </div>
                </div>
                <!-- /column -->


                <!-- /column -->
            </div>
            <!-- /.row -->

            <hr />
            <p class="copyright pull-left">© ООО «Бранко Рус», 2021. Coded by <a href="http://it-pskov.ru/">IT Nova</a>.</p>
            <ul class="footer-menu pull-right">
                <li><a href="/">О нас</a></li>
                <li><a href="/incubirovanie">Инкубирование</a></li>
                <li><a href="/contact">Контакты</a></li>
                <li><a href="/admin">Войти</a></li>
            </ul>
        </div>
        <!-- .container -->

    </footer>
    <!-- /footer -->
</div>
<!--/.body-wrapper -->
<script src="{{asset('style/js/jquery.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/js/plugins.js')}}"></script>
<script src="{{asset('style/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('style/js/scripts.js')}}"></script>
</body>
</html>
