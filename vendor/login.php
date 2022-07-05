<?php

//ЛОГИНИТСЯ В СИСТЕМУ
require 'database.php';

$data = $_POST;
if(isset($data['log'])){
  if($data['login'] == ''){
    header('Location: ../sign.php');
  }
  if($data['password'] ==''){
    header('Location: ../sign.php');
  }

  $user = R::findOne('users','login =?', array($data['login']));
  if($user){
    
    if(password_verify($data['password'], $user->password)){

      $_SESSION['logged_user'] = $user;
      header('Location: ../index.php');
    }
  }else{
    header('Location: ../sign.php');
  }
}


?>