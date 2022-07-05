<?php


$id = 1;
$user = R::load('users', $id);
$name__admin= $user->login;
$spes__admin= $user->spes;
$who__admin =$user->status;
$osebe =$user->o_sebe;
$image = $user->image;
if($who__admin == 0){
    $who__admin = 'Пользователь';
}if($who__admin == 1){
    $who__admin = 'Админ';
}


?>