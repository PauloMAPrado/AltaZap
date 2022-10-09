<?php 

session_start();
session_destroy();
header(/* local da tela de inicio para redirecionar */);
exit();

?>