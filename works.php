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
  <title>Работы</title>
  <link rel="stylesheet" href="../assets/css/works.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/style_profile.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
  <!-- ХЕДЕР-->
  <?php

include 'components/header/header.php'
?>

    <div class="works">
      <h2 class="wwwww">Мои работы</h2>

      
      <?php  
      include 'components/post/worki.php';
    ?>

    </div>

    <!-- ПРОФИЛЬ -->
    <?php
    include 'components/profile/profile.php'
    ?>
  </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>