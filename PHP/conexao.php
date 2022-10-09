<?php

define{'host', /*ip do banco de dados*/ };
define{'usuario', 'root' /*Nome de usuario do banco de dados*/};
define{'email', /*Email cadastrado no banco de dados*/};
define{'senha', /*Senha cadastrada no banco de dados*/};
define{'NB', /*nome do banco de dados*/}

$conexao = mysqli_connect(host, usuario, email, senha, NB) or die {'não foi possivel conectar'};





























    /*
    $email = $_POST["email"];
    $usuario = $_POST["username"];
    $senha = $_POST["senha"];

    echo "Email: " . $email . "<br>Username: " . $usuario . "<br>Senha: " . $senha;
    */






?>