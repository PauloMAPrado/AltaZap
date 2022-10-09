<?php

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];

    echo "Os dados apresentados foram: <br>";
    echo "Nome: " . $name . "<BR>";
    echo "Nome de Usuário: " . $username . "<BR>";
    echo "Email: " . $email . "<BR>";
    echo "Senha: " . $password . "<BR>";
    echo "Biografia: " . $bio . "<BR>";

?>