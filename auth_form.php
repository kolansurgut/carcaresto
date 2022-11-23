<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CarCare</title>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">

                    <form action="validation_form/auth.php" method="post">

                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Пароль">
                        </div>

                        <button class="auth_btn" type="submit">Войти</button>
                        <a class="back_btn" href="index.php">Назад</a>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
