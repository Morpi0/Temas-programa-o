<?php

$salarioBruto = $_GET['SALARIOBRUTO'];
$transporte = $_GET['TRANSPORTE'];
$pensaoAlimenticia = $_GET['PAT'];
$outrosDescontos = $_GET['OUTROS'];

$Subtracao = $transporte + $pensaoAlimenticia + $outrosDescontos;

$final = $salarioBruto - $Subtracao;

?>