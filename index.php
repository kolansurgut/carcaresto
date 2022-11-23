<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link href="CSS/style.css" rel="stylesheet">
        <title>CarCare</title>
    </head>
    <body>
        <?php
        if($_COOKIE['user_name'] == ''):
        ?>
        <a href="register_form.php">Регистрация</a>
        <br>
        <a href="auth_form.php">Вход</a>
        <?php else: ?>
        <p><?=$_COOKIE['user_name']?>, вы авторизованны!</p>
        <br>
        <p>Чтобы выйти из учетной записи нажмите <a href="exit.php">здесь</a></p>
        <?php endif; ?>
    </body>
</html>
