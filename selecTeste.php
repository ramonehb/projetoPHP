<?php

$nome = 'dell';

require_once 'entidades/Inventario.php';
$maquina = new Inventario('Lenovo', 1, '16 GB', 'True', 'Observação');
$maquina->verificarMaquina($nome);
