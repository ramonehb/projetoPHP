<?php

if ($_POST) {
    $user = $_POST["user"];
    $password = $_POST["password"];

    if (!empty($user) && !empty($password)) {
        if (strlen($user) > 2 && strlen($password) > 2) {
            require_once "../entidades/Usuario.php";
            $usuario = new Usuario();
            $usuario->VerificarUsusuario($user, $password);
        } else {
            echo 'Campos com tamanho invalidados para cadastrar no banco de dados';
        }
    } else {
        echo "<h2>Verifique os campos em branco.</h2>";
    }
} else {
    echo "Erro tente mais tarde novamente";
}
