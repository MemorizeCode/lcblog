<?php
//СОЗДАЕТ ТАСК(ПОСТЫ НА СТЕНЕ)
require 'database.php';

$data = $_POST;

$text = strip_tags($data['text']);

if(isset($_SESSION['logged_user'])){
  $id_y = $_SESSION['logged_user']->id;
  if($id_y == '1'){
    //
    if(isset($data['send'])){
     
      if($data['text'] == ''){
        header('Location: ../index.php');
      }else{
        $task = R::dispense('tasks');
        $task->text = $text;
        $task->date=date('Y-m-d');
        R::store($task);
        header('Location: ../index.php');
      }
  }else{
    header('Location: ../index.php');
  }
}else{
  header("Location: ../index.php");
}
}else{
  header("Location: ../index.php");
}


?>