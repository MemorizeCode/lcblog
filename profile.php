<?php
require 'vendor/database.php';
require 'components/settings/setting.php';
if(isset($_SESSION['logged_user'])){
  $you_id = $_SESSION['logged_user']->id;
  if($you_id == '1'){
    //
  }if($you_id != '1'){
    header('Location: ../sign.php');
  }
}else{
  header('Location: ../sign.php');
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Профиль</title>
  <link rel="stylesheet" href="../assets/css/register.css">
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

    <div class="register">
      <h2>Профиль</h2>
      <div class="reg">
        <form action="../vendor/profile_settings.php" method="POST" class="form">
          <input type="text" placeholder="Логин" name="login">
          <input type="text" placeholder="Специальность" name="spes">
          <!-- <input type="text" placeholder="О себе" name="o_sebe" value="<?php echo $osebe   ?>"> -->
          <textarea name="o_sebe" id="textarea" cols="30" rows="10" ><?php  echo $osebe ?></textarea>
         
          <button type="submit" name="reg">Сохранить</button>
        </form>
        <h2>Новая работа</h2>
        <form action="../vendor/new_work.php" method="POST" class="form">
          <input type="text" placeholder="Имя" name="name">
          <!-- <input type="text"  id="" placeholder="Текст" name="text"> -->
          <textarea name="text" id="textarea" cols="30" rows="10" ></textarea>
         
          <button type="submit" name="newwork">Добавить работу</button>
        </form>
        <form action="../vendor/delete_work.php" method="POST" class="form">
          <h2>Удалить работу</h2>
          <input type="number" placeholder="Введите ID записи" name="work_id">
          <button type="submit" name="del">Сохранить</button>
        </form>
        <form action="../vendor/new_stayas.php" method="POST" class="form">
          <h2>Новая статья</h2>
          <input type="text" placeholder="Введите название" name="name">
          <textarea name="text" id="textarea" cols="30" rows="10" ></textarea>
          <input type="text" name="silka" placeholder="Ссылка одна(не обязательно)">
          <button type="submit" name="new">Сохранить</button>
        </form>
        <form action="../vendor/delete_post.php" method="POST" class="form">
          <h2>Удалить запись/пост</h2>
          <input type="number" placeholder="Введите ID записи" name="post_id">
          <button type="submit" name="del">Сохранить</button>
        </form>
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