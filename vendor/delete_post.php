<?php
//УДАЛЯЕТ ПОСТ(СТЕНУ)
require 'database.php';

$data = $_POST;

$post_id = strip_tags($data['post_id']);

if(isset($data['del'])){
  if($data['post_id'] ==''){
    header('Location: ../profile.php');
  }else{
    $id = $post_id;
    $stat = R::load('statyas', $id);
    R::trash($stat);
    header('Location: ../profile.php');
  }
}

?>