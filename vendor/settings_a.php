<?php
//ЭТО ПОДГРУЖАЕТ ИНФУ НА СТРАНИЦАХ
require 'database.php';


$id = 1;
$user = R::load('users', $id);
$name__admin= $user->login;
$spes__admin= $user->spes;
$who__admin =$user->status;
if($who__admin == 0){
    $who__admin = 'Пользователь';
}if($who__admin == 1){
    $who__admin = 'Админ';
}


?>