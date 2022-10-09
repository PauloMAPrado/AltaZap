<?php 

session_start();

if(!$_SESSION['usuario']){
    header("location: login.html");
    exit();
}

?>