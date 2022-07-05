<?php
require 'vendor/database.php';
require 'components/settings/setting.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Профиль</title>
  <link rel="stylesheet" href="../assets/css/profile.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/style_profile.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <!-- ПРОФИЛЬ -->
    <?php

include 'components/header/header.php'
?>
    </div>
    <div class="settings">
      <form action="vendor/profile_setting.php" method="POST" class="form">
        <h2>Настройки профиля</h2>
        <input type="text" name="login" placeholder="Изменить Имя/Логин">
        <input type="text" name="spes" placeholder="Изменить специальность">
        <button type="submit" name="sett">Сохранить</button>
      </form>
    </div>
        <!-- ПРОФИЛЬ -->
        <?php
    include 'components/profile/profile.php'
    ?>
  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>