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

    <div class="header">
        <div class="logo">
            <img class="_logo" id="logo" src="img/logo.png">
        </div>
        <div class="nav">
            <a class="_nav" href="#">главная</a>
            <a class="_nav" href="#">тарифы</a>
            <a class="_nav" href="#">уроки</a>
            <a class="_nav" href="#">о нас</a>
            <a class="_nav" href="#">контакты</a>
        </div>
        <div  class="auth">
            <?php
            if($_COOKIE['user_name'] == ''):
            ?>
            <img class="img_auth" id="logo" src="#">
            <a class="_auth" href="auth_form.php">вход</a>
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

    <div class="info">
    </div>

    <div class="citata">
        <div class="citata_line_up"></div>
        <div class="citata_line_down"></div>
        <div class="citata_fon"></div>
        <p class="citata_text">Специально для вас мы подготовим расходные материалы и<br>инструменты, чтобы ремонт проходил наиболее комфортно.</p>
        <img class="citata_icon" src="img/citata_icon.png">
    </div>
    </body>
</html>
