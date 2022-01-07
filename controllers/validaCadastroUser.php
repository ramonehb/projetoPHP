<?php



if ($_POST) {
    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $confir = $_POST['senhaConfirme'];
    if (!empty($nome) && !empty($senha) && !empty($email) && !empty($confir)) {
        if (strlen($nome) > 3 && strlen($senha) >= 3 && strlen($email) > 5 && strlen($confir) >= 3) {
            if ($senha === $confir) {
                date_default_timezone_set('America/Sao_Paulo');
                $dataCadastro = date('Y-m-d H:i');
                require_once __DIR__ . '/../entidades/Usuario.php';
                $usuario = new Usuario();
                $usuario->cadastroUsuario($nome, $senha, $email, $dataCadastro);
            } else {
                echo "As senhas devem ser identicas";
            }
        } else {
            echo 'Campos com tamanho indevido para cadastrar no banco de dados';
        }
    } else {
        echo 'ERRO';
    }
}
