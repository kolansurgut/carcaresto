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

                    <form action="validation_form/register.php" method="post">

                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="ФИО">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Пароль">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="password_repeat" name="password_repeat" placeholder="Повторите пароль">
                        </div>

                        <button class="register_btn" type="submit">Регистрация</button>
                        <a class="back_btn" href="index.php">Назад</a>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
