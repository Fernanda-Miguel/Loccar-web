<?php 

    session_start();
    //include('verifica.php');

    //incluindo a conexao
    include('../controller/conexao.php');

    //pegando os dados das tabelas e transformando em vareaveis
    $sql = "SELECT * FROM `usuarios`";

    $dados= mysqli_query($conexao,$sql);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--link css-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Loc Car</title>
  </head>
  <body class="corSecundaria">
   

<nav class="navbar navbar-light corPrimaria">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg> 
        Loc Car</a>
    </div>
</nav>


<div class="Config">
    <br>
    <p class="fs-1 text-center text-white">Painel de Configuração</p>
    <br>
    
    <div class="d-grid gap-2 col-6 mx-auto" style="max-width: 200px;">
    <br>
      <a href="../views/home.php" class="btn corPrimaria text-white" type="button">Retornar 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
       <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
      </svg>
      </a>
      <br>
    </div>
    <br> 
</div>


<section class="container">

<br>
    <p class="fs-1 text-center text-white">Usuários cadastrados</p>
<br>

<main >

<table class="table bg-light text-center" >

  <thead>
    <tr>    
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Opções de edição</th>
    </tr>
  </thead>

  <tbody>
    
  <?php

//recebendo varevel dados 
while ($linha= mysqli_fetch_assoc ( $dados)) {
   
   //pegando os dados da vareavel dados e colocando em novas vareaveis e colocando na tabela

   $id = $linha ['id'];
   $email = $linha ['email'];
   $senha = $linha ['senha'];


    echo "
    
    <tr>
    <td>$email</td>
    <td>$senha</td>
   
    <td>

    <a href='tela_de_editar_usuario.php? id=$id' class='btn btn-success'> Editar </a>

    <a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirmar'
    onClick= " . '"' . "pegar_dados( $id )" . '"'. ">Excluir</a>

    </td>

    </tr> 
    
    ";
}

?>

<!-- Modal-->
<div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="../controller/excluir.php" method="POST">
       <p> Realmente deseja EXCLUIR?</p>
      </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

           <input type="hidden" name="id" ID="codCDN_pessoa" value="">

           <input type="submit" class="btn btn-danger" value="Confirmar">
           
           <script>
           
           function pegar_dados(id){

            //document.getElementById("cod_pessoa2").value = nomeCDN;
            document.getElementById("codCDN_pessoa").value = id; 

           }

           </script>

      </form>
</div>


</table>

</main>

</section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>