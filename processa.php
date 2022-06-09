<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Envio</title>
</head>
<body>
<?php
// servidores variaveis super globais GET, POST

// GET
//  $nome =  $_GET["nome"];
//  $email = $_GET["email"];
//  $sexo = $_GET["sexo"];


 // POST 

//   $nome = $_POST["nome"]; 
//   $email = $_POST["email"];
//   $sexo = $_POST["sexo"];


//  echo $nome . ", " . $email . ", " . $sexo;

//  echo "<br>";
 
// //  print_r($_GET);
//      print_r($_POST);

// Request

// print_r($_REQUEST);

// echo "<br>";
// $nome =  $_REQUEST["nome"]; 
// $email = $_REQUEST["email"];
// $sexo =  $_REQUEST["sexo"];

// echo $nome . ", " . $email . ", " . $sexo;

// echo "<br>";

// echo "Id :" . $_REQUEST["id"];
// echo "<br> Produto : " . $_REQUEST["produto"];
// echo "<br> Valor : " . number_format($_REQUEST["valor"], 2, ",",".") ;

// validação por back-end 
$nome =  $_REQUEST["nome"]; 
$logradouro = $_REQUEST["logradouro"];
$numero =  $_REQUEST["numero"];
$CEP =  $_REQUEST["CEP"];
$complemento =  $_REQUEST["complemento"];
$bairro =  $_REQUEST["bairro"];
$cidade =  $_REQUEST["cidade"];
$estado =  $_REQUEST["estado"];


// if( strlen($nome) <= 5){
//      echo "CAMPO NOME OBRIGATÓRIO!!!";// }

if( empty($nome)){
     echo "CAMPO NOME OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=nome");
}

if( empty($logradouro)){
     echo "CAMPO LOGRADOURO OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=logradouro");
}

if( empty($numero)){
     echo "CAMPO NUMERO OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=numero");
}

if( empty($CEP)){
     echo "CAMPO CEP OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=cep");
}

if( empty($complemento)){
     echo "CAMPO COMPLEMENTO OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=complemento");
}

if( empty($bairro)){
     echo "CAMPO BAIRRO OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=bairro");
}
if( empty($cidade)){
     echo "CAMPO CIDADE OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=cidade");
}
if( empty($estado)){
     echo "CAMPO ESTADO OBRIGATÓRIO!!!";
     header("Location: upload.php?erro=estado");
}

echo "<h3>Imagem</h3>";
echo "Nome: " .$_FILES["arq"]["name"] ."<br>";
     echo "Tipo: " .$_FILES["arq"]["type"] ."<br>";
     echo "Tamanho: " .$_FILES["arq"]["size"] ."<br>";
     echo "Error: " .$_FILES["arq"]["error"] ."<br>"; // 0 ate 8(exceto 5);
     echo "Diretorio temporario: " .$_FILES["arq"]["tmp_name"] ."<br>";
     
     // arquivo temporario diretorio
     $tmp = $_FILES["arq"]["tmp_name"] ;
     // destino do arquivo no site a ser definitivo
     $arq =  "./imagem/".$_FILES["arq"]["name"] ;

     if( move_uploaded_file( $tmp, $arq )){
         echo "<br> Arquivo enviado com sucesso para o servidor!!";
     }
?>
</body>
</html>