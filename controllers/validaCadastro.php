<?php

    if ($_POST)
    {
        $nomes = array($_POST["nome1"],$_POST["nome2"],$_POST["nome3"]);
        $salarios = array($_POST["salario1"],$_POST["salario2"],$_POST["salario3"]);
        
        if(!empty($nomes[0]) && !empty($nomes[1]) && !empty($nomes[2]) && !empty($salarios[0]) && !empty($salarios[1]) && !empty($salarios[2]))
        {
            //INSERT NO DB
        }
        else
        {
            echo "<h1>VERIQUE OS CAMPOS</h1>";
        }
    }
    
?>