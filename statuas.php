<?php
require 'vendor/database.php';
require 'components/settings/setting.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Статья</title>
  <link rel="stylesheet" href="../assets/css/statyas.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/style_profile.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
         <!-- хедер -->
         <?php

include 'components/header/header.php'
?>
  <div class="statyas">
    <div class="statyas__st">
      <h2>Все статьи</h2>
    </div>

    <?php  
      include 'components/post/statya.php';
    ?>
  </div>
        <!-- ПРОФИЛЬ -->
              
        <?php
    include 'components/profile/profile.php'
    ?>

  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>