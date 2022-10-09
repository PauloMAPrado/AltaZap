<?php 

session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['email']) || empty($_POST['senha'])){
    header('location: login.html');
    exit();
}

$usuario = mysqli_real_scape_string($conexao, $_POST['usuario']);
$email = mysqli_real_scape_string($conexao, $_POST['email']);
$senha = mysqli_real_scape_string($conexao, $_POST['senha']);

$query = "select usuraio_id, usuario, email from usuario where usuario = '{$usuario}' and email = '{$email}' and senha = md5('{$senha}')"

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header(/*indicar locar de redirecionamente*/);
    exit();
}else{
    header(locate: login.html);
    exit();
}

?>