<?php
require_once "inventario.php";
    class Inventario extends Connection
    {
        public function select($id)
        {
            try
            {
                $conn = new Connection();
                $conn->abrir();

                $cmd = $conn->prepare('SELECT * FROM inventarios where id = :id ');
                $cmd->execute(array(
                    ':id' => $id
                ));
            }
            catch (Exception $e)
            {
                throw new Exception($e->getMessage());
            }
        }

        public function insert($nome,$quantidade,$ram,$ssd,$departamento,$observacao)
        {
            try
            {   
                $pdo = new Connection();
                $pdo->abrir();
                //METODOS pdo->prepare() = roda querys com parametros / pdo-query = roda apenas querys que não precisa de parametros
                $cmd = $pdo->prepare("INSERT INTO inventario(nome, quantidade, memoria, ssd, departamento, observacao) VALUES (:n, :q, :m, :s, :d, :o)");
                //Passando os valores metodo bindparam = so passa valores atraves de objetos e variaves & bindValue = voce pode passar valores qualqueres 
                $cmd->bindparam(":n",$nome);
                $cmd->bindparam(":q",$quantidade);
                $cmd->bindparam(":m",$ram);
                $cmd->bindparam(":s",$ssd);
                $cmd->bindparam(":d",$departamento);
                $cmd->bindparam(":o",$observacao);
                $cmd->execute();
            }
            catch (Exception $e)
            {
                throw new Exception ($e->getMessage());
            }
        }

        public function deletar($id)
        {
            try
            {
                $pdo = new PDO('mysql:dbname=kyntall;localhost', "root", "1234");
                $cmd = $pdo->prepare("DELETE FROM inventario WHERE id = :id");
                $cmd->execute(array(
                    ':id'=> $id
                ));
            }
            catch (Exception $e)
            {
                throw new Exception ($e->getMessage());
            }
        }

        public function update($nome,$quantidade,$ram,$ssd,$departamento,$observacao,$id)
        {
            try
            {
                $conn = new Connection('kyntal','localhost','root',1234);
                $cmd = $conn->prepare("UPDATE inventario SET nome=:n, quantidade=:q, memoria=:m, ssd=:s, departamento=:d, observacao=:o WHERE id=:id");
                $cmd->execute(array(
                ':n' => $nome,
                ':q' => $quantidade,
                ':m' => $ram,
                ':s' => $ssd,
                ':d' => $departamento,
                ':o' =>$observacao,
                ':id' => $id
                ));
            }
            catch (Exception $e)
            {
                throw new Exception ($e->getMessage());
            }
        }
    }

        
?>