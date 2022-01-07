    <?php
    /**
     * LIMPAR A TABELA INVENTARIO NO BANCO E VERIFICAR O TIPO DE DADOS DA MEMORIA RAM
     */
    if ($_POST) {
      $nome = $_POST["nome"];
      $quantidade = $_POST["quanti"];
      $valueDepar = $_POST["depar"];
      $departamento = "";
      $ram = $_POST["ram"];
      $ssd = $_POST["ssd"];
      $obs = $_POST["obs"];

      if (!empty($nome) && !empty($quantidade) && !empty($ram) && $valueDepar != '0') {
        if (empty($obs)) {
          $obs = "SEM OBSERVAÇÂO";
        }
        if (strlen($nome) >= 3) {
          if ($quantidade > 0) {
            $nome = strtoupper($nome);
            $obs = strtoupper($obs);

            switch ($valueDepar) {
              case '1':
                $departamento = "2";
                break;

              case '2':
                $departamento = "3";
                break;

              case "3":
                $departamento = "8";
                break;

              case "4":
                $departamento = "7";
                break;

              case '5':
                $departamento = "4";
                break;

              case '6':
                $departamento = "9";
                break;

              case '7':
                $departamento = "1";
                break;

              default:
                $departamento = "ERRO NO SWITCH DO DEPARTAMENTO";
                break;
            }

            //INSERT
            require_once __DIR__ . '/../entidades/Inventario.php';
            $inventario = new Inventario();
            $inventario->insert($departamento, $nome, $quantidade, $ram, $ssd, $obs);
          } else {
            echo 'Impossivel cadastrar produtos com a quantidade negativa';
          }
        } else {
          echo 'O campo nome esta com pouco caracteres';
        }
      } else {
        print("Erro ao cadastrar!");
      }
    } else {
      echo "<h1>Campos em branco</h1>";
    }
    ?>
    
