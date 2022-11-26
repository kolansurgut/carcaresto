<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CarCare</title>
</head>
    <body>
        <div class="form">
            <form action="blocks/auth.php" method="post">

                <div class="form-group">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Пароль">
                </div>

                <button class="auth_btn" type="submit">Войти</button>
                <a class="back_btn" href="index.php">Назад</a>
                <br>
                <p class="au_text">Нет аккаунта? <a class="au_btn" href="register_form.php">Зарегистрируйтесь.</a></p>
            </form>
        </div>
    </body>
</html>
