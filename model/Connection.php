<?php
class Connection extends PDO
{
    public function __construct($db = null,$host = null, $user = null, $pass = null){
        $dns = "mysql:dbname=$db;host=$host";
        parent::__construct($dns, $user, $pass);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function abrir()
    {
        try {
            $user = "root";
            $password = "1234";
            //Instanciar o PDO e passa os parametros dbname & host & user & password
            $pdo = new PDO('mysql:dbname=kyntall;localhost', $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        } 
    }
}
