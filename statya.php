<?php
require 'vendor/database.php';



require 'components/settings/setting.php';
//пока тут
$etot_id = $_GET['id'];
if($etot_id == null){
  echo $etot_id;
  header('Location: ../statya.php');
}else{
  $stat = R::load('statyas', $etot_id);
  $silka = $stat->silka;
  $name = $stat->name;
  $etot_text = $stat->text;
  $etot_data = $stat->date;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Статьи</title>
  <link rel="stylesheet" href="../assets/css/statya.css">
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
  <!-- ПОСТ -->
  <div class="post">
    <div class="set">
      <a href="statuas.php" class="right__set">вернуться назад</a>
     
    </div>
    <div class="post__name">
      <h2><?php echo $name  ?></h2>
    </div>
    <div class="post__date">
      <p><?php echo $etot_data; ?></p>
      <p>ID записи:<?php echo $etot_id; ?></p>
    </div>
    <div class="post__text">
      <p><?php echo $etot_text; ?></p>
      <?php if($silka == null){
        //
      }else{
        echo '<a href="'.$silka.'">Ссылка</a>';
      } ?>
    </div>
  </div>

        <!-- ПРОФИЛЬ -->
              
              <?php
    include 'components/profile/profile.php'
    ?>

  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>