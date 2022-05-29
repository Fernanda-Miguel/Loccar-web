<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<?php

//inscluindo arquivo de conexao
include "conexao.php";

//criando vareaveis para editar
$id= $_POST ['id'];
$email= $_POST ['email'];
$senha= $_POST ['senha'];


//pegando vareaveis e atualizando os dados inserindo nelas 
$sql= "UPDATE `usuarios` SET `email`='$email',`senha`='$senha',`id`='$id'

WHERE id=$id";

//aviso se foi atualizado ou nao 
if (mysqli_query($conexao , $sql)) {

  echo  "<script>
      
  alert('Alterado com sucesso');
  window.location='../views/home.php';
 
  </script>";
   
  //mensagem("$nomeADM, Alterado com sucesso" , 'success');
 
   
}else {

  echo  "<script>
      
    alert('NÃO Alterado com sucesso');
    window.location='../views/tela_de_editar_usuario.php';
   
    </script>";
    
   // mensagem("$nomeADM, NÃO Alterado com sucesso" , 'danger');
    
}


?>
</body>
</html>