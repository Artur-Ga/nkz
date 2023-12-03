<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour lines</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script:regular" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__bottom">
                <nav class="header__nav nav">
                    <a href="#" class="nav__logo">
                        <img src="img/nkz-logo.png" alt="" class="nav__logo-img">
                        <p class="nav__logo__title">
                            <span>tour</span>
                            lines</p>
                    </a>
                    <ol class="nav__list">
                        <div class="nav__item nav-item__desctop">
                            <a href="#tours" class="nav__link">топ 8</a>
                        </div>
                        <div class="nav__item nav-item__desctop">
                            <a href="#tourse__page" class="nav__link">туры</a>
                        </div>
                        <div class="nav__item nav-item__desctop">
                            <a href="#booking" class="nav__link">бронирование </a>
                        </div>
                        <div class="nav__item nav-item__desctop">
                            <a href="#contact" class="nav__link">контакты</a>
                        </div>
                    </ol>
                    <?php
                        if($_COOKIE['user'] == ''):
                    ?>
                    <a href="#login-container" class="nav__user-btn">вход</a>

                    <?php else: ?>
                    <a href="validation/exit.php" class="nav__user"><?=$_COOKIE['user']?></a>

                    <?php endif; ?>
                    
                    <a href="#mobile-container"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Hamburger_icon.svg/210px-Hamburger_icon.svg.png" alt="" class="mobile-menu"></a>
                </nav>
            </div>
        </header>
        <!-- --------------------- -->
        <div id="mobile-container">
            <a href="#" class="mobile-wrapper"></a>
            <div class="mobile-window">
                <a href="#" class="mobile-close">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235""
                        alt="">
                </a>
                <nav class="mobile-nav nav-mobile">
                    <div class="nav__item nav-item__mobile">
                        <a href="#" class="nav__link nav-link__mobile">топ 20</a>
                    </div>
                    <div class="nav__item nav-item__mobile">
                        <a href="#" class="nav__link nav-link__mobile">туры</a>
                    </div>
                    <div class="nav__item nav-item__mobile">
                        <a href="#" class="nav__link nav-link__mobile">бронирование </a>
                    </div>
                    <div class="nav__item nav-item__mobile">
                        <a href="#" class="nav__link nav-link__mobile">контакты</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ------------ -->

        <main class="main">
            <section class="hero">
                <div class="hero__conteiner __conteiner">
                    <h1 class="hero__title">Туры по Новокузнецку</h1>
                </div>
            </section>
            <section class="topoftours" id="tours">
                <div class="topoftours__conteiner __conteiner">
                    <div class="topoftours__content">
                        <p class="topoftours__title">топ 8</p>
                        <div class="topoftours__names"><span>Улица Большая Садовая</span>
                            <span style="font-size: 25px;">Набережная реки Дон</span>
                            <span style="font-family: Marck-Script" class="name-1">Донская государственная публичная
                                библиотека </span>
                            <span style="font-weight: 200;">Свято-Иверский Женский Монастырь</span>
                            <span style="color: cadetblue;">Парк «Лога»</span>
                            <span style="font-size: 30px; font-weight: 700;">Левбердон</span>
                            <span style="font-style: italic;font-size: 26px;">Парк им. Октябрьской Революции</span>
                            <span style="">Центральный городской парк им. А. М. Горького
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ----------------popupi---------------- -->
            <div id="tours__popup-conteiner1" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/бульвар героев.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Свято-Иверский Женский Монастырь
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">15000</div>
                                <div class="content-meta__nights">20 дней</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            О главной туристической артерии Ростова-на-Дону, коей является Большая Садовая, можно
                            говорить часами </h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner2" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/драм театр.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Левбердон
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">12000</div>
                                <div class="content-meta__nights">5 дней</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            Уже многие годы сюда приезжают, чтобы отдохнуть телом и душой в кафе, ресторанах, на
                            песчаных пляжах и на базах отдыха со всеми удобствами
                            Адрес: г. Ростов-на-Дону, ул. Левобережная. </h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner-3" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/крепость.webp" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Набережная реки Дон
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">2000</div>
                                <div class="content-meta__nights">2 дня</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            Где живет счастье? — В Ростове-на-Дону оно обитает на набережной реки Дон, ведь именно здесь
                            собираются все ростовчане, дабы отметить очередной праздник.
                            Адрес: г. Ростов-на-Дону, ул. Береговая, 49а.</h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner4" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/площадь побед.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Донская государственная публичная библиотека
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">1000</div>
                                <div class="content-meta__nights">3 дня</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            Следующий памятник архитектуры Пушкинской улицы появился здесь относительно недавно — в 1994
                            году, но этому предшествовали долгие
                            Адрес: г. Ростов-на-Дону, ул. Пушкинская, 175а.</h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner5" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/сквер ермакова 2.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Парк им. Октябрьской Революции
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">2500</div>
                                <div class="content-meta__nights">7 дней</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            В 2021 парк им. Октябрьской революции отметил свой 95-летний юбилей. Первое время парк был
                            не так популярен, но в 70-х годах начался его расцвет.
                            Адрес: г. Ростов-на-Дону, Театральный проспект, 1..</h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner6" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/собор рождества христова.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Свято-Иверский Женский Монастырь
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">1 милион мухахаха</div>
                                <div class="content-meta__nights"></div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            Среди народа бытовало мнение, что ростовский купец С. И. Фёдоров выстроил Свято-Иверский
                            монастырь ради своей 16-летней дочери, пожелавшей уйти в монахини, но каких-либо достоверных
                            сведений об этом нет.
                            Адрес: г. Ростов-на-Дону, ул. Неклиновская, 4.</h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner7" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/стелла држбы.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Свято-Иверский Женский Монастырь
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">12000</div>
                                <div class="content-meta__nights">1 дней</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            Весной и летом парк Горького полон зелени, в фонтанах плещется вода, а многочисленные
                            скульптуры смотрятся особенно живописно, окруженные растениями
                            Адрес: г. Ростов-на-Дону, ул. Большая Садовая, 45.</h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tours__popup-conteiner8" class="tours__popup-container">
                <a href="#" class="tours__popup-wrapper"></a>
                <div class="tours__popup-window">
                    <a href="#tours" class="tours__popup-close">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235"
                            alt="" style="width: 40px; height: 40px;">
                    </a>
                    <img src="img/tours/Храм Святого Мученика Иоанна.jpg" alt="" class="tours-popap__img">
                    <div class="tours__popur-content content">
                        <div class="content__top content-top">
                            <h3 class="content-top__title">Парк «Лога» (150 км от Ростова-на-Дону)
                            </h3>
                            <div class="content-top__meta content-meta">
                                <div class="content-meta__price">3000</div>
                                <div class="content-meta__nights">12 дней</div>
                            </div>
                        </div>
                        <h4 class="content__subtitle">
                            Попадая в парк «Лога», вы оказываетесь в сказке, наполненной мифическими персонажами,
                            старинными замками и чудесами. В это трудно поверить, но чуть больше десяти лет назад на
                            месте парка находилась свалка, а теперь в пруду плавают лебеди, по лужайке ходят павлины, а
                            вокруг благоухают цветы и зеленые деревья качаются на ветру.
                            Координаты: 48.35158446794208, 40.29531274040658
                        </h4>
                        <div class="content__bottom content-bottom">
                            <a href="#" class="content-bottom__btn">забронировать</a>
                            <div class="content-bottom__stars">
                                <img src="img/rating-32.png" alt="" class="rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- -->

            <section class="page__tourse tourse-page" id="tourse__page">
                <div class="tourse-page__conteiner __conteiner">
                    <div class="tourse-page__row">
                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner1" class="course__img-link">
                                    <img src="img/tours/бульвар героев.jpg" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a href="#tours__popup-conteiner1" class="meta__title">Свято-Иверский Женский
                                        Монастырь
                                    </a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 15.00</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner2" class="course__img-link">
                                    <img src="img/tours/драм театр.jpg" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner2">Левбердон</a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 16.00</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner-3" class="course__img-link">
                                    <img src="img/tours/крепость.webp" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner-3">Набережная реки Дон </a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 08.00</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner4" class="course__img-link">
                                    <img src="img/tours/площадь побед.jpg" alt="" class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner4">Донская государственная
                                        публичная библиотека</a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 06.00</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner5" class="course__img-link">
                                    <img src="img/tours/сквер ермакова 2.jpg" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner5">Парк им. Октябрьской
                                        Революции</a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 13.30</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner6" class="course__img-link">
                                    <img src="img/tours/собор рождества христова.jpg" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner6">Свято-Иверский Женский
                                        Монастырь</a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 18.00</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner7" class="course__img-link">
                                    <img src="img/tours/стелла држбы.jpg" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner7">Центральный городской парк
                                        им. А. М. Горького</a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 15.25</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tourse-page__column column">
                            <div class="column__top">
                                <a href="#tours__popup-conteiner8" class="course__img-link">
                                    <img src="img/tours/Храм Святого Мученика Иоанна.jpg" alt=""
                                        class="column__img">
                                </a>
                                <div class="column__meta meta">
                                    <a class="meta__title" href="#tours__popup-conteiner8"> Парк «Лога» (150 км от
                                        Ростова-на-Дону)</a>
                                    <h6 class="meta__price">100р</h6>
                                    <p class="meta__stars">5 pdtpl</p>
                                </div>
                            </div>
                            <div class="column__bottom bottom">
                                <div class="bottom__meta">
                                    <h6 class="bottom__time">c 14.00</h6>
                                    <h6 class="bottom__many">6 ночей</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__booking booking-page" id="booking">
                <div class="hero__conteiner __conteiner">
                    <h3 class="booking-page__title">Бронирование</h3>
                    <p class="booking-page__subtitle">Пройдите регистрацию или выполните вход в учетную запись</p>
                    <a class="booking-page__user-btn" style="margin: 0 auto;" href="#">регистрация/вход</a>
                </div>
            </section>
        </main>

        <footer class="footer" id="contact">
            <div class="footer__top footer-top">
                <div class="footer-top__iframe">
                    <a class="a_place"
                        href="https://yandex.ru/maps/39/rostov-na-donu/house/bolshaya_sadovaya_ulitsa_67/Z0AYcQZnTEIEQFptfX5zc3hkZA==/?ll=39.718541%2C47.221908&z=17.72"
                        target="_blank">наше
                        местоположение</a>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac80215baf59a1c8038bea9f5defa50dc624a6672b140a06a090e8c0dcece5cb6&amp;source=constructor"
                        frameborder="0"></iframe>
                </div>
                <div class="footer-top__contact contact">
                    <a href="tel:79000542099" class="contact__tel contact__item " >+79000542099</a>
                    <a href="https://vk.com/ya_ebashu_sol" class="contact__vk contact__item " target="_blank">вк</a>
                    <a href="https://t.me/+x44YrTnBYYpmZTZi" class="contact__tg contact__item " target="_blank">+телеграм</a>
                    <a href="mailto:xz227@bk.ru" class="contact__tel contact__item ">xz227@bk.ru</a>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="p_footer">@2023 Майонез entertainment </p>
            </div>
        </footer>
    </div>

<a href="#contact-form-container" class="contact-form-open">
    <img src="images/mail.png" alt="">
</a>

 <div id="contact-form-container">
    <a href="#" class="form-wrapper"></a>
    <div class="contact-form-window">
        <a href="#" class="form-close">
            <img src="images/close.png" alt="">
        </a>
        <form class="form" action="contact/send.php" method="post">
            <div class="input-container">
                <input type="text" name="fname" placeholder="Ваше имя" required >
                <input type="email" name="email" placeholder="Ваш e-mail" required>
                <input type="tel" name="tel" placeholder="Ваш телефон">
            </div>

             <textarea name="message" placeholder="Сообщение" required></textarea>

            <input class="form-btn" type="submit" value="Отправить">
        </form>
    </div>
</div>

<div id="login-container">
    <a href="#" class="form-wrapper"></a>
    <div class="login-window">
        <a href="#" class="form-close">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235""" alt="">
        </a>
        <form class="form" action="validation/login.php" method="post">
            <div class="input-container">
                <input type="text" name="login" placeholder="Логин" required >
                <input type="password" name="pass" placeholder="Пароль" required>
            </div>

            <input class="form-btn" type="submit" value="Войти">

            <a href="#register-container" class="register">Зарегистрироватся</a>
        </form>
    </div>
</div>

<div id="register-container">
    <a href="#" class="form-wrapper"></a>
    <div class="register-window">
        <a href="#" class="form-close">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg/768px-%D0%98%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0_%D0%BA%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%28ei%29.svg.png?20141227230235""" alt="">
        </a>
        <form class="form" action="validation/register.php" method="post">
            <div class="input-container">
                <input type="text" name="login" placeholder="Логин" required >
                <input type="email" name="email" placeholder="e-mail" required>
                <input type="password" name="pass" placeholder="Пароль">
                <input type="password" name="passrepeat" placeholder="Повторить пароль">
            </div>

            <input class="form-btn" type="submit" value="Зарегистрироватся">
        </form>
    </div>
</div>
</body>

</html>