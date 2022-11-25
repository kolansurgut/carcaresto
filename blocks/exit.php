<?php
    setcookie('user_name', $user['name'], time() - 60 * 60 * 24 * 365, '/');
    header("Location: /");
?>

