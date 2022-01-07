<?php

class Usuario
{
    public $nome;
    public $senha;
    public $email;
    public $atualizacao;

    public function VerificarUsusuario($usuario, $senhaUsuario)
    {
        $userDB = 'root';
        $passwordDB = '1234';
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=projetinho', $userDB, $passwordDB);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $cmd = $pdo->prepare("SELECT * FROM USUARIOS where nome = '$usuario' AND senha = '$senhaUsuario'");
            $cmd->execute();
            if ($cmd->rowCount() == 1) {
                require_once '../menu.php';
            } else {
                echo '<h1>Usuário Invalido</h1>';
                echo '<button><a href="../cadastroConta.php">Cadastra-se</a></button></br></br>';
                echo '<button><a href="../index.php">Voltar a tela de login</a></button>';
            }
        } catch (PDOException $erro) {
            throw new Exception($erro->getMessage());
        }
    }

    public function cadastroUsuario($nome, $senha, $email, $cadastro)
    {
        $userDB = 'root';
        $passwordDB = '1234';
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=projetinho', $userDB, $passwordDB);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $cmd = $pdo->prepare('INSERT INTO Usuarios (nome,senha,email,cadastro) VALUES (:n, :s, :e, :c)');
            $cmd->execute(array(
                ':n' => $nome,
                ':s' => $senha,
                ':e' => $email,
                ':c' => $cadastro
            ));
            if ($cmd->rowCount() == 1) {
                echo '<button><a href="../cadastroConta.php">Cadastrar outro usuario.</a></button></br></br>';
                echo '<button><a href="../index.php">Entrar</a></button>';
            } else {
                echo 'Erro ao cadastrar usuario.';
            }
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
        }
    }
}
