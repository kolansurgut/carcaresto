<?php
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password_repeat = filter_var(trim($_POST['password_repeat']), FILTER_SANITIZE_STRING);
    if ($password == $password_repeat)
    {
        $password = md5($password."1m2o3l4o5d6e7z8u9g0a1d2a3l4");

        require "connect.php";

        $mysql->query("INSERT INTO `users` (`phone`, `name`, `password`, `admin`) VALUES('$phone', '$name', '$password', '0')");

        $mysql->close();
        header("Location: /auth_form.php");
    }
    else
    {
        header("Location: /register_form.php");
    }
?>