<!-- <?php
// require 'database.php';

// $data = $_POST;

// if(isset($data['reg'])){

//   if(R::count('users', 'email = ?', array($data['email']))> 0){
//     //
//   }else{

//     $user = R::dispense( 'users' );
//     $user->login = $data['login'];
//     $user->email = $data['email'];
//     $user->password =password_hash( $data['password'], PASSWORD_DEFAULT);
//     $user->status = 0;
//     $user->spes = '';
//     $id = R::store( $user );
//     header('Location: ../sign.php');
//   }
  

// }

?> -->

<?php


//НАСТРОЙКИ ПРОФЕЛЯ или ПРОФИЛЯ ХЗ) )
require 'database.php';
if(isset($_SESSION['logged_user'])){
  $id = $_SESSION['logged_user']->id;
  $data = $_POST;
  if(isset($data['reg'])){
    $user = R::load('users', $id);
    if($data['login']== ''){
      //
    }else{
      $user->login = $data['login'];
    }
    if($data['spes'] ==''){
      //
    }else{
      $user->spes= $data['spes'];
    }
    if($data['o_sebe'] ==''){
      //
    }
    else{
      $user->o_sebe=$data['o_sebe'];
    }
    if($data['image'] ==''){
      //
    }
    else{
      $user->image=$data['image'];
    }
    R::store($user);
    header('Location: ../profile.php');
  }
}


?>