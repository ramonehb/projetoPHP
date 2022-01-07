<?php

class Autenticacao
{
    public $user;
    public $password;

    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function verificarLogin($login, $senha)
    {
        $userAdm = array("Humberto", "Arthur");
        $passwordAdm = array("123", "456");
        if ($login === $userAdm[0] && $senha === $passwordAdm[0] || $login === $userAdm[1] && $senha === $passwordAdm[1]) {
            require_once __DIR__ . '/../../inventario.php';
        } else {
            echo "Usuário ou Senha invalidos";
        }
    }
}
