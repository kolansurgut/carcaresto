<?php
    setcookie('phone', $phone, time() - 60 * 60 * 24 * 365, '/');
    header("Location: /");
?>

