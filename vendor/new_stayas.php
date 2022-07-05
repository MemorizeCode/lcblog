

<?php
//НОВАЯ СТАТЬЯ (НЕ ПОСТ НЕ СТЕНЕ)
require 'database.php';

$data = $_POST;

if(isset($data['new'])){
  if($data['name'] == ''){
    header('Location: ../profile.php');
  }
  if($data['text']==''){
    header('Location: ../profile.php');
  }
  else{
    $stat = R::dispense('statyas');
    $stat->name = strip_tags($data['name']) ;
    $stat->text = strip_tags($data['text']) ;
    $stat->silka = strip_tags($data['silka']);
    $stat->date=date('Y-m-d');
    R::store($stat);
    header('Location: ../profile.php');
  }
}




?>