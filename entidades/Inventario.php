<?php

class Inventario
{
    public $nome;
    public $quantidade;
    public $memoria;
    public $ssd;
    public $observacao;

    /*     public function __construct($nome,$quantidade,$memoria,$ssd,$observacao)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->memoria = $memoria;
        $this->ssd = $ssd;
        $this->observacao = $observacao;
    } */

    public function insert($departamento, $nome, $quantidade, $ram, $ssd, $obs)
    {
        try {
            $password = "1234";
            $username = "root";
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=projetinho', $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('INSERT INTO projetinho.inventarios (departamento_id,nome,quantidade,memoria,ssd,observacao) VALUES(:d, :nome,:quantidade,:memoria,:ssd,:observacao)');
            $stmt->execute(array(
                ':d' => $departamento,
                ':nome' => $nome,
                ':quantidade' => $quantidade,
                ':memoria' => $ram . ' GB',
                ':ssd' => $ssd,
                ':observacao' => $obs
            ));

            //echo $stmt->rowCount();
            echo "<h1>Cadastrado com sucesso</h1>";
            echo "<br/><a href='../inventario.php'><button >Cadastro outro produto</button></a>";
        } catch (PDOException $erro) {
            throw new Exception($erro->getMessage());
        }
    }

    public function verificarMaquina($nomeMaquina)
    {
        try {
            $password = "1234";
            $username = "root";
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=projetinho', $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $cmd = $pdo->query("SELECT * FROM inventarios where nome = '$nomeMaquina' OR nome like '%$nomeMaquina%'");
            $cmd->execute();
            if ($cmd->rowCount() == 1) {
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                echo "<pre>";
                print_r($resultado);
                /**
                 * Esta trazendo um objeto do banco, se trazer mais de um da erro
                 * Finalizar a verificação se o objeto ja esta cadastrado se sim aumentar apenas a quantidade
                 */
            } else {
                echo 'SQLERROR:';
            }
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
        }
    }
}
