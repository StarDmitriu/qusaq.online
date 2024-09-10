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
    <?php include ('components/header.php');?>
    <main>
        <div class="service" id="service">
            <div class="container">
                <h1 class="service__title">НАШИ УСЛУГИ</h1>
                <div class="service__items">
                        <div class="service__item service__itemBG1">
                            <div class="service__item service__content">
                                <div class="service__item-title">Отделка и ремонт квартир</div>
                                 <div class="service__item-text">Профессиональная отделка и ремонт квартир, превращающая ваши идеи в реальность и создающая уютное и красивое жилище.</div>
                                <a href="renovate-flat.php"><button class="service__item-button">Перейти</button></a>
                            </div>
                        </div>
                        <div class="service__item service__itemBG2">
                            <div class="service__item service__content">
                                <div class="service__item-title">Дизайн интерьера</div>
                                <div class="service__item-text">Создание удобных и стильных интерьеров, отражающих вашу индивидуальность и предоставляющих комфортное пространство для жизни.</div>
                                <a href="design.php"><button class="service__item-button">Перейти</button></a>
                            </div>
                        </div>
                        <div class="service__item service__itemBG3">
                            <div class="service__item service__content">
                                <div class="service__item-title">Отделка и ремонт комм. недвижимости</div>
                                 <div class="service__item-text">Качественная отделка и ремонт комм. недвижимости для привлекательного и удобного рабочего пространство вашего бизнеса.</div>
                                <a href="kom.php"><button class="service__item-button">Перейти</button></a>
                            </div>
                        </div>
                        <div class="service__item service__itemBG4">
                            <div class="service__item service__content">
                                <div class="service__item-title">Отделка и ремонт частных домов</div>
                                <div class="service__item-text">Индивидуальный ремонт частных домов для уникального и комфортного жилья, отвечающего вашим потребностям.</div>
                                <a href="home.php"><button class="service__item-button">Перейти</button></a>
                            </div>
                        </div>
                
                </div>
                <div class="service__itemBG5">
                   <div class="service__item_wrapperBG5">
                        <div class="service__item-cont">
                            <div class="service__item-title">Пакетный ремонт</div>
                            <div class="service__item-text">Комплексный ремонт, включающий в себя работы и все материалы для (сдачи или быстро заехать!)</div>
                        </div>
                        <a href="material.php"><button class="service__item-button">Перейти</button></a>
                    </div>
                   </div>
            </div>
        </div>
        <?php include ('components/time.php');?>
        <?php include ('components/application.php');?>
        <?php include ('components/price.php');?>
        <?php include ('components/portfolio.php');?>
        <?php include ('components/team.php');?>
    </main>
    <?php include ('components/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>