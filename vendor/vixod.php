<?php
//ВЫХОД ИЗ СЕССИИ
require 'database.php';
unset($_SESSION['logged_user']);
header('Location: ../index.php');

?>