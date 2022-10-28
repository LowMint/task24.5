<?php

/* @var $this \application\core\View */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$this->title?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="/application/public/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link href="/application/public/css/style.css" rel="stylesheet" />
    <link href="/application/public/css/responsive.css" rel="stylesheet" />
</head>
<body>
<header>
    <div class="hero_area">

        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="?page=main">
            <span>
              Хьюстон
            </span>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item">
                                    <a class="nav-link" href="?page=main">Главная <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?page=portfolio"> О нас </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?page=services"> Услуги </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?page=contacts">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
    </div>
</header>
<?php include $this->content_view; ?>

<footer>
    <section class="info_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info-logo">
                        <h2>
                            Хьюстон
                        </h2>
                        <p>
                            Наш дружный коллектив состоит из мастеров с большим опытом работы. Мы стараемся стать лучшей компанией по ремонту.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-nav">
                        <h4>
                            Навигация
                        </h4>
                        <ul>
                            <li>
                                <a href="?page=main">
                                    Главная
                                </a>
                            </li>
                            <li>
                                <a href="?page=portfolio">
                                    О нас
                                </a>
                            </li>
                            <li>
                                <a href="?page=services">
                                    Услуги
                                </a>
                            </li>
                            <li>
                                <a href="?page=contacts">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-contact">
                        <h4>
                            Контактная информация
                        </h4>
                        <div class="location">
                            <h6>
                                Главный офис:
                            </h6>
                            <a href="">
                                <img src="/application/public/images/location.png" alt="">
                                <span>
                    город Москва, пер. Чехова, 01
                  </span>
                            </a>
                        </div>
                        <div class="call">
                            <h6>
                                Номер телефона:
                            </h6>
                            <a href="">
                                <img src="/application/public/images/telephone.png" alt="">
                                <span>
                    8 800 555 35 35
                  </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="discover">
                        <h4>
                            Другое
                        </h4>
                        <ul>
                            <li>
                                <a href="">
                                    Помощь
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Как это работает

                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Подпишись
                                </a>
                            </li>
                            <li>
                                <a href="?page=contacts">
                                    Контактные данные
                                </a>
                            </li>
                        </ul>
                        <div class="social-box">
                            <a href="">
                                <img src="/application/public/images/facebook.png" alt="">
                            </a>
                            <a href="">
                                <img src="/application/public/images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="/application/public/images/google-plus.png" alt="">
                            </a>
                            <a href="">
                                <img src="/application/public/images/linkedin.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2022 All Rights Reserved
        </p>
    </section>

    <script type="text/javascript" src="/application/public/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/application/public/js/bootstrap.js"></script>
</footer>
</body>
</html>