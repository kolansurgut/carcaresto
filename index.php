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
    <div class="photo"></div>
    <div class="info">
        <div class="_info">
            <img class="info_photo" src="img/san.jpg">
        </div>
        <div class="_info">
            <img class="info_photo" src="img/san.jpg">
        </div>
        <div class="_info">
            <img class="info_photo" src="img/san.jpg">
        </div>
    </div>
    <div class="places"></div>
    <div class="booking"></div>
    <div class="footer"></div>
    </body>
</html>
