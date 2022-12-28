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
            <a class="navigation_text_2" href="#tarifs">тарифы</a>
            <a class="navigation_text_3" href="#about_as">о нас</a>
            <a class="navigation_text_4" href="#listen">уроки</a>
            <a class="navigation_text_5" href="#contact">контакты</a>
        </div>
        <div  class="log_in">
            <?php
            if($_COOKIE['phone'] == ''):
            ?>

            <img class="img_auth" src="img/img_log_in.png">
            <div class="authorization">
                <input type="checkbox" id="check_auth">
                <label class="auth_btn" for="check_auth">вход</label>
                <div class="auth_bg"></div>
                <form action="blocks/auth.php" method="post" class="form_auth">

                    <div class="form_group">
                        <input type="text" class="phone_auth" id="phone" name="phone" placeholder="Номер телефона">
                    </div>

                    <div class="form_group">
                        <input type="text" class="password_auth" id="password" name="password" placeholder="Пароль">
                    </div>

                    <button class="auth_submit" type="submit">Войти</button>
                    <label class="back_btn_auth" for="check_auth">+</label>
                    <br>
                    <p class="link_reg_text">Нет аккаунта? <label class="link_reg" for="check_reg">Зарегистрируйтесь.</label></p>
                </form>

                <input type="checkbox" id="check_reg">
                <form action="blocks/register.php" method="post" class="form_reg">
                    <div class="form-group">
                        <input type="text" class="phone_reg" id="phone" name="phone" placeholder="Номер телефона">
                    </div>

                    <div class="form-group">
                        <input type="text" class="name_reg" id="name" name="name" placeholder="ФИО">
                    </div>

                    <div class="form-group">
                        <input type="text" class="password_reg" id="password" name="password" placeholder="Пароль">
                    </div>

                    <div class="form-group">
                        <input type="text" class="password_repeat_reg" id="password_repeat" name="password_repeat" placeholder="Повторите пароль">
                    </div>

                    <button class="reg_submit" type="submit">Регистрация</button>
                    <label class="back_btn_reg" for="check_reg">+</label>
                    <br>
                    <p class="link_auth_text">Уже есть аккаунт? <label class="link_auth" for="check_reg">Войдите.</label></p>
                </form>
            </div>

            <?php else: ?>
            <a class="lk"><?=$_COOKIE['phone']?></a>
            <input type="checkbox" id="check_lk">
            <label class="img_lk" for="check_lk"></label>

            <div class="lk_menu">
                <a class="bron">Текущие заказы</a><br>
                <a class="bron">Забронировать</a><br>
                <a class="bron">История</a><br>
                <a href="blocks/exit.php" class="exit">Выход</a>
            </div>

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
        <div class="tarif_top" id="tarifs">
            <p class="tarif_text_1">ТАРИФЫ</p>
            <p class="tarif_text_2">Что мы предлагаем?</p>
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
        <div class="citata_line_down" id="about_as"></div>
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
            <a class="about_us_block_link" id="listen">Записаться</a>
        </div>
    </div>

    <div class="video">
        <div class="video_bg"></div>
        <p class="video_text">ВИДЕОУРОКИ</p>
        <div class="video_line"></div>

        <div class="video_wrap_list">
            <ul class="video_list">
                <li class="video_item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/V7CRU60DCYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video_item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ow3G0PTm6SU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video_item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GWbkByQ0OXg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video_item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/soo0BcMaGOU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video_item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mZ7AHyvbK9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
            </ul>
        </div>

    </div>

    <div class="footer" id="contact">
        <p class="footer_mail">carcare@mail.ru</p>
        <p class="footer_number">+7 (XXX) XXX-XX-XX</p>
        <p class="footer_city">г.Сургут</p>
    </div>

    </body>
</html>
