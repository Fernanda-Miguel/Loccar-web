<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php

//incluindo a conexao
include "conexao.php";

//criando vareaveis para armazenar dados digitados no input
$marca= $_POST ['marca'];
$modelo= $_POST ['modelo'];
$cor= $_POST ['cor'];
$placa= $_POST ['placa'];
$qportas= $_POST ['qportas'];

///inserindo valores na tabelda
$sql= "INSERT INTO `veiculos`( `marca`,`modelo`, `cor`, `placa`, `qportas`) 
VALUES ('$marca','$modelo','$cor','$placa','$qportas')";


if (mysqli_query($conexao , $sql)) {

   // mensagem("$nomeADM, Alterado com sucesso" , 'success');

    echo  "<script>
      
    alert('cadastrado com sucesso');
    window.location='../views/home.php';
   
    </script>";

}else {

  //  mensagem("$nomeADM, NÃO Alterado com sucesso" , 'danger');

  echo  "<script>
      
  alert('NÃO cadastrado com sucesso');
  window.location='../views/tela_de_cadastro.php';
 
  </script>";

}



?>

</body>
</html>
