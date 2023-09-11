<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $_SESSION['logged_in_user_id'] = '1';
    $_SESSION['logged_in_user_name'] = 'username';
    ?>
    <br>
</body>
</html>