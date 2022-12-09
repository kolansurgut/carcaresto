<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link href="CSS/index.css" rel="stylesheet">
        <title>CarCare</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>
    <body>

    <div class="navigation">
        <img class="logo" src="img/logo.png">
        <div class="navigation_menu">
            <a class="navigation_text_1" href="#">главная</a>
            <a class="navigation_text_2" href="#">тарифы</a>
            <a class="navigation_text_3" href="#">о нас</a>
            <a class="navigation_text_4" href="#">уроки</a>
            <a class="navigation_text_5" href="#">контакты</a>
        </div>
        <div  class="log_in">
            <?php
            if($_COOKIE['user_name'] == ''):
            ?>
            <img class="img_auth" src="img/img_log_in.png">
            <a class="auth_text" href="auth_form.php">вход</a>
            <?php else: ?>
            <a class="lk" href="blocks/exit.php"><?=$_COOKIE['user_name']?></a>
            <img class="img_lk" id="logo" src="#">
            <?php endif; ?>
        </div>
    </div>

    <div class="first_screen">
        <img class="memsto" src="/img/memsto.png">
        <div class="filtr"></div>
        <p class="first_screen_text">Станция для самостоятельного технического обслуживания</p>
        <div class="first_screen_button">
            <div class="first_screen_button_bg">
                <p class="first_screen_button_text">Наша презентация</p>
            </div>
        </div>
    </div>

    <div class="all_tarif">
        <div class="tarif_top">
            <p class="tarif_text_1">ТАРИФЫ</p>
            <p class="tarif_text_2">Что мы предлогаем?</p>
        </div>
        <div class="tarif_line"></div>
        <div class="tarif_1">
            <div class="tarif_baner">
                <div class="tarif_baner_bg"></div>
                <p class="tarif_name">Дневной без подъёмника</p>
                <div class="tarif_baner_line_horizontal"></div>
                <p class="tarif_hour">300 ₽<br>час</p>
                <p class="tarif_minets">180 ₽<br>30 мин</p>
                <div class="tarif_baner_line_vertical"></div>
            </div>
            <img class="tarif_img" src="img/pic_t1.svg">
        </div>
        <div class="tarif_2">
            <div class="tarif_baner">
                <div class="tarif_baner_bg"></div>
                <p class="tarif_name">Дневной с подъёмником</p>
                <div class="tarif_baner_line_horizontal"></div>
                <p class="tarif_hour">400 ₽<br>час</p>
                <p class="tarif_minets">230 ₽<br>30 мин</p>
                <div class="tarif_baner_line_vertical"></div>
            </div>
            <img class="tarif_img" src="img/pic_t2.png">
        </div>
        <div class="tarif_3">
            <div class="tarif_baner">
                <div class="tarif_baner_bg"></div>
                <p class="tarif_name">Ночной тариф</p>
                <div class="tarif_baner_line_horizontal"></div>
                <p class="tarif_hour">550 ₽<br>час</p>
                <p class="tarif_minets">300 ₽<br>30 мин</p>
                <div class="tarif_baner_line_vertical"></div>
            </div>
            <img class="tarif_img" src="img/pic_t3.png">
        </div>
    </div>

    <div class="citata">
        <div class="citata_line_up"></div>
        <div class="citata_line_down"></div>
        <div class="citata_fon"></div>
        <p class="citata_text">Специально для вас мы подготовим расходные материалы и<br>инструменты, чтобы ремонт проходил наиболее комфортно.</p>
        <img class="citata_icon" src="img/citata_icon.png">
    </div>

    <div class="about_us">
        <div class="about_us_line"></div>
        <div class="about_us_text">
            <p class="about_us_text_1">О нас</p>
            <p class="about_us_text_2">Сервис</p>
            <p class="about_us_text_3">Car Care</p>
            <p class="about_us_text_4">Мы предоставляем вам всё необходимое для осуществления ремонта своего автомобиля. Для консультаций на территории сервиса работает мастер широкого профиля, вы всегда можете обраиться к нему за помощью. На арендованом вами месте вас будет ждать форма, инструметы и расходные материалы.</p>
        </div>
        <div class="about_us_block_1">
            <div class="about_us_block_bg"></div>
            <p class="about_us_block_number">4</p>
            <p class="about_us_block_text">Оборудованных<br>места</p>
            <a class="about_us_block_link">Записаться</a>
        </div>
        <div class="about_us_block_2">
            <div class="about_us_block_bg"></div>
            <p class="about_us_block_number">2</p>
            <p class="about_us_block_text">Места<br>с подъемником</p>
            <a class="about_us_block_link">Записаться</a>
        </div>
        <div class="about_us_block_3">
            <div class="about_us_block_bg"></div>
            <p class="about_us_block_number">2</p>
            <p class="about_us_block_text">Места без<br>подъемника</p>
            <a class="about_us_block_link">Записаться</a>
        </div>
        <div class="about_us_block_4">
            <div class="about_us_block_bg"></div>
            <p class="about_us_block_number">2</p>
            <p class="about_us_block_text">Специалиста</p>
            <a class="about_us_block_link">Записаться</a>
        </div>
    </div>

    </body>
</html>
