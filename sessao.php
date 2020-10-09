<?php  
session_start();
unset($SESSION['id_usuario']);
header("login.php");
?>