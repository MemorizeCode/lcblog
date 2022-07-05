<?php
//УДАЛЯЕТ РАБОТУ

require 'database.php';

$data = $_POST;

if(isset($data['del'])){
  if($data['work_id'] ==''){
    header('Location: ../profile.php');
  }else{
    $id = strip_tags($data['work_id']) ;
    $work = R::load('works', $id);
    R::trash($work);
    header('Location: ../profile.php');
  }
}

?>