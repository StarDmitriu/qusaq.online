<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/normalize.css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <title>service</title>
</head>
<body>
    <header class="header">
        <div class="burger__menu" id="burger__menu">
            <div class="container">
                <div class="header__inner">
                    <div class="burger" id="burgerNone" onclick="burgerNoneFunc()">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <button class="header__button">Задать вопрос</button>
                </div>
            </div>
            <div class="burger__items">
                <div class="burger__item">
                    <h1 class="burger__title burger__titleM">УСЛУГИ</h1>
                    <a href="index.html#service" class="burger__link">КОМПЛЕКСНЫЙ РЕМОНТ И ОТДЕЛКА</a>
                    <a href="index.html#service" class="burger__link">ДИЗАЙН ИНТЕРЬЕРА</a>
                    <a href="index.html#service" class="burger__link">КОМПЛЕКСНЫЙ РЕМОНТ И ОТДЕЛКА КВАРТИР</a>
                    <a href="index.html#service" class="burger__link">КОМПЛЕКСНЫЙ РЕМОНТ И ОТДЕЛКА КОММ. ПОМЕЩЕНИЙ</a>
                    <a href="index.html#service" class="burger__link">КОМПЛЕКСНЫЙ РЕМОНТ И ОТДЕЛКА ЧАСТНЫХ ДОМОВ</a>
                    <a href="index.html#service" class="burger__link">ПАКЕТНЫЙ РЕМОНТ КВАРТИР (ОТДЕЛКА + МАТЕРИАЛЫ)</a>
                </div>
                <div class="burger__items-cont">
                    <div class="burger__item">
                        <h1 class="burger__title"><a href="#portfolio">ПОРТФОЛИО</a></h1>
                    </div>
                    <div class="burger__item">
                        <h1 class="burger__title">МЕДИА</h1>
                        <a href="#" class="burger__link">101GROUP</a>
                    </div>
                    <div class="burger__item">
                        <h1 class="burger__title">КОМПАНИЯ</h1>
                        <a href="#" class="burger__link">ИСТОРИЯ</a>
                        <a href="#team" class="burger__link">КОМАНДА
                        <a href="#reviews" class="burger__link">ОТЗЫВЫ</a>
                        <a href="#footer" class="burger__link">КОНТАКТЫ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__inner" id="header__inner">
                <div class="burger" id="burger" onclick="toggleClass()">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <a href="#certificate"><button class="header__button">Задать вопрос</button></a>
            </div>
            <div class="header__info" id="header__info">
                <div class="header__cont">
                    <p class="header__subtitle">В Новороссийске, Геленджике и Анапе</p>
                    <h1 class="header__title">КОМПЛЕКСНЫЙ РЕМОНТ И ОТДЕЛКА ЧАСТНЫХ ДОМОВ</h1>
                    <p class="header__text">Качественный ремонт от 12.000 руб/м2 с гарантией 36 месяцев</p>
                </div>
                <div class="header__container">
                    <div class="header__contTwo">
                        <p class="header__cont-text">БАЗОВЫЙ ДИЗАЙН-ПРОЕКТ В ПОДАРОК  </p>
                        <a href="renovate-flat.html#price"><button class="header__cont-button">Узнать стоимость ремонта</button></a>
                    </div>
                    <div class="header__cardsMedia">
                        <div class="header__card">
                            <img src="img/headerCard1.svg" alt="">
                            <p class="header__card-text">Прозрачная смета, известная ещё до начала работ</p>
                        </div>
                        <div class="header__card">
                            <img src="img/headerCard2.svg" alt="">
                            <p class="header__card-text">Чёткое соблюдение сроков работ</p>
                        </div>
                        <div class="header__card">
                            <img src="img/headerCard3.svg" alt="">
                            <p class="header__card-text">Персональный менеджер проекта</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__cards">
                <div class="header__card">
                    <img src="img/headerCard1.svg" alt="">
                    <p class="header__card-text">Прозрачная смета, известная ещё до начала работ</p>
                </div>
                <div class="header__card">
                    <img src="img/headerCard2.svg" alt="">
                    <p class="header__card-text">Чёткое соблюдение сроков работ</p>
                </div>
                <div class="header__card">
                    <img src="img/headerCard3.svg" alt="">
                    <p class="header__card-text">Персональный менеджер проекта</p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php include ('components/time.php');?>
        <?php include ('components/application.php');?>
        <?php include ('components/portfolio.php');?>
        <?php include ('components/team.php');?>
        <?php include ('components/price.php');?>
    </main>
    <?php include ('components/footer.php');?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>