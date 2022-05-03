<?php

function Adicao($arg1, $arg2){
$resultado = $arg1 + $arg2;
return $resultado;
}

$valor = Adicao(230, 78);
echo $valor;
echo "<br>";

function Subtracao($arg1, $arg2){
$resultado = $arg1 - $arg2;
return $resultado;
}

$valor = Subtracao(87, 55);
echo $valor;
echo "<br>";

function Multiplicacao($arg1, $arg2){
$resultado = $arg1 * $arg2;
return $resultado;
}

$valor = Multiplicacao(66, 3);
echo $valor;
echo "<br>";

function Divisao($arg1, $arg2){
$resultado = $arg1 / $arg2;
return $resultado;
}

$valor = Divisao(500, 100);
echo $valor;


?>