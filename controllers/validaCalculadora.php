<?php



if ($_POST) {
    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];

    $m1 = $_POST["m1"];
    $m2 = $_POST["m2"];

    $d1 = $_POST["d1"];
    $d2 = $_POST["d2"];

    $ss1 = $_POST["ss1"];
    $ss2 = $_POST["ss2"];

    if (!empty($s1) && !empty($s2)) {
        $somar = $s1 + $s2;
        echo "<h2>A soma é: $somar</h2>";
        echo "<br/><a href='../calculadora.php'><button >Calcular novamente</button></a>";
    } else if (!empty($m1) && !empty($m2)) {
        $multiplicar = $m1 * $m2;
        echo "<h2>A multiplicação é: $multiplicar</h2>";
        echo "<br/><a href='../calculadora.php'><button >Calcular novamente</button></a>";
    } else if (!empty($ss1) && !empty($ss2)) {
        $subtrair = $ss1 - $ss2;
        echo "<h2>A subtração é: $subtrair</h2>";
        echo "<br/><a href='../calculadora.php'><button >Calcular novamente</button></a>";
    } else if (!empty($d1) && !empty($d2)) {
        $dividir = $d1 / $d2;
        echo "<h2>A divisão é: $dividir</h2>";
        echo "<br/><a href='../calculadora.php'><button >Calcular novamente</button></a>";
    } else {
        echo 'SqlError';
        echo "<br/><a href='../calculadora.php'><button >Voltar</button></a>";
    }
}
