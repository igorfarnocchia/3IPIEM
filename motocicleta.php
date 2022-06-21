<?php
// vincular os arquivos
include("veiculo.php");
include_once("veiculo.php");
require("veicuulo.php");
require_once("veiculo.php");

//objeto/instancia
$moto = new Veiculo();
echo "Código : " . $moto->id= 002;
echo "<br>";
echo "Fabricante : " . ->fabricante= "Yamaha";
echo "<br>";
echo "Modelo : " . $moto->modelo= "MT600";
echo "<br>";
echo "Tipo : " . $moto->tipo= "Moto";
echo "<br>";
echo "Ano de fabricação : " . $moto->ano_fab= "2021";
echo "<br>";
echo "Ano do modelo : " . $moto->ano_mod= "2022";
echo "<br>";
echo "Cor : " . $moto->cor= "Preta";
echo "<br>";
echo "Combustível : " . $moto->combustivel= "Flex";
echo "<br>";
$moto->Destino("Sorocaba", "Adrianopolis");
$moto->Consumo();
//mostrar o valor na tela
//echo "<br>" .  $moto->id;
?>