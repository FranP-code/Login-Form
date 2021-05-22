<?php

require '../logic/sql/connection.php';
require './generateData.php';

$cantidadDeDatos = 7;
$minCH = 7;
$maxCH = 19;

$data = generateData($cantidadDeDatos, $minCH, $maxCH);
$data2 = generateData($cantidadDeDatos, $minCH, $maxCH);

for ($i=0; $i < count($data); $i++) { 
    $userUp = $connect -> prepare('insert into users (user, pass) values (?, ?)');
    $userUp -> bindParam(1, $data[$i], PDO::PARAM_STR);
    $data2H = hash('sha256', $data2[$i]);
    $userUp -> bindParam(2, $data2H, PDO::PARAM_STR);
    $userUp -> execute();
}




?>