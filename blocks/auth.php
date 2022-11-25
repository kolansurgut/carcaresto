<?php
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password = md5($password."1m2o3l4o5d6e7z8u9g0a1d2a3l4");

    require "connect.php";

    $auth = $mysql->query("SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$password'");
    $user = $auth->fetch_assoc();

    if(count($user) == 0) {
        exit();
    }

    setcookie('user_name', $user['name'], time() + 60 * 60 * 24 * 365, '/');

    $mysql->close();
    header("Location: /");
?>