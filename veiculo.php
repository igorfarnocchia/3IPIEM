<?php
class Veiculo{
    //visibilidade pode ser:
        //public
        //private
        //protected
    public $id;
    public $fabricante;
    public $modelo;
    public $tipo;
    public $ano_fab;
    public $ano_mod;
    public $cor;
    public $combustivel;

    //iremos add métodos (função)

    public function Destino ($partida, $chegada){
        echo "Destino: " . $chegada . "/ Origem: " . $partida;
    }

    public function Consumo(){
        echo "<br> Gasto por km ";
    }
} //fim de classe

//iremos criar um objeto/instancia de uma classe(base)

//$moto = new Veiculo();
//algumas linguagens usa ponto(.) p ter acesso aos campos/atributos e metodos, porem o PHP USA UMA SETA(->)
//acessar o campo $id
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