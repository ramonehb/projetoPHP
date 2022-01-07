<?php

if ($_POST) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirmaSenha'];
    if (!empty($usuario) && !empty($email) && !empty($senha) && !empty($confirmaSenha)) {
        if (strlen($usuario) <= 2 || strlen($email) <= 10 || strlen($senha) <= 6 || strlen($confirmaSenha) <= 6) {
            echo 'SqlError: Verifique os campos';
        } else {
            if ($senha === $confirmaSenha) {
                try {
                    $userDB = 'root';
                    $passwordDB = '1234';
                    $pdo = new PDO('mysql:host=locahost;dbname=hrsolution', $userDB, $passwordDB);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $cmd = $pdo->prepare('INSERT INTO usuario (usuario, senha, email) VALUES (:usuario, :senha, :email)');
                    $cmd->execute(array(
                        ':usuario' => $usuario,
                        ':senha' => $senha,
                        ':email' => $email
                    ));
                } catch (Exception $erro) {
                    throw new Exception($erro->getMessage());
                }
            } else {
                echo 'SqlError: Senhas não são identicas';
            }
        }
    } else {
        echo 'SqlError: Campos em branco';
    }
} else {
    echo 'SqlError: Não houve method POST';
}
