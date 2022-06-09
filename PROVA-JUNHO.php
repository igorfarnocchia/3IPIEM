<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script type="text/javascript">
     window.onload=()=>{

     //var,let, const 
     const nome = document.getElementById("nome");
     let bt =  document.getElementById("bt_");
     let logradouro = document.getElementById("logradouro");
     let frm = document.getElementsByTagName("form")[0]

     bt.onclick=()=>{
    
         if(nome.value.length <= 3 ){
            alert("campo nome obrigatorio");
            nome.focus();
         } 

         if(email.value.length <= 10 ){

            email.style.borderColor = "red";
            logradouro.focus();
         }

         frm.submit();
           
       }

     }

   </script>


</head>
<body>
    <!-- POST - 
         GET - -->
    <form action="processa.php" method="post" enctype="multipart/form-data">
        <div>
         <label> Nome: </label>
         <input type="text" name="nome" id="nome">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "nome"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
      
        <div>
         <label> Logradouro: </label>
         <input type="text" name="logradouro" id="logradouro">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "logradouro"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 

        <div>
         <label> Número: </label>
         <input type="text" name="numero" id="numero">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "numero"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> CEP: </label>
         <input type="text" name="CEP" id="CEP">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "CEP"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Complemento: </label>
         <input type="text" name="complemento" id="complemento">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "complemento"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Bairro: </label>
         <input type="text" name="bairro" id="bairro">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "bairro"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Cidade: </label>
         <input type="text" name="cidade" id="cidade">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "cidade"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Estado: </label>
         <input type="text" name="estado" id="estado">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "estado"){

               echo "<span style='color:red'>*</span>";
         } ?>
       </div>

       <form action="procUpload.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Imagem</label>
            <input type="file" name="arq" id="" />
</div>
<div>
    <input type="submit" value="enviar"/>
</div>
        </form>
  

</body>
</html>