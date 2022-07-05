<?php
//НОВАЯ РАБОТА
require 'database.php';
$data = $_POST;
if(isset($_SESSION['logged_user'])){

  if(isset($data['newwork'])){
    if($data['name'] == ''){
      header('Location: ../profile.php');
    }
    if($data['text'] == ''){
      header('Location: ../profile.php');
    }
    else{
      $work = R::dispense('works');
      $work->name =strip_tags($data['name']) ;
      $work->text = strip_tags($data['text']);
      $work->silka = strip_tags($data['silka']);
      $work->data= date('Y-m-d');
      R::store($work);
      header('Location: ../profile.php');
    }
  
  }
}
?>