<?php 

session_start();
include("conexao.php");

$nome = mysqli_real_scape_string($conexao, trim($_POST["nome"]))
$fone = mysqli_real_scape_string($conexao, trim($_POST["fone"]))
$email = mysqli_real_scape_string($conexao, trim($_POST["email"]))
$senha = mysqli_real_scape_string($conexao, trim(md5($_POST["senha"])))
$username = mysqli_real_scape_string($conexao, trim($_POST["username"]))

$sql = "select count(*) as total usuario where usuario = '$usuario'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if($row["total"] == 1) {
    $_SESSION["usuario_existe"] = true;
    header(Location: cadastro.html);
    exit;
}

$sql = 
?>