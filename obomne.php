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
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/style_profile.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Обо мне</title>
</head>
<body>
  <div class="container">
  <?php

include 'components/header/header.php'
?>  <div class="block">

  <h2><?php  echo $osebe;  ?></h2>
</div>
    
    <?php
    include 'components/profile/profile.php'
    ?>

  </div>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>