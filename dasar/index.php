<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="nama">
  <br>
  <br>
  Umur: <input type="text" umur="umur">
  <input type="submit">
  <br>
  <br>

  <?php
      session_start();
      echo 'Id user saya adalah ' , $_SESSION['logged_in_user_Id'];
      echo '<br>';
      echo 'username saya adalah ' , $_SESSION['logged_in_user_name'];
    ?>

</form>
</body>
</html>