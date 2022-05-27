<?php 

    session_start();
    //include('verifica.php');

    //incluindo a conexao
    include('../controller/conexao.php');

    //pegando os dados das tabelas e transformando em vareaveis
    $sql = "SELECT * FROM `veiculos`";
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


<div>
    <br>
    <p class="fs-1 text-center text-white">Veículos alugados</p>
    <br>
    
    <div class="d-grid gap-2 col-6 mx-auto" style="max-width: 200px;">
    <br>
      <a href="../views/tela_de_cadastro.php" class="btn corPrimaria text-white" type="button">Cadastrar veiculo
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
       <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
      </svg>
      </a>
      <br>
      <br>
    </div>
    <br> 
</div>


<section class="container">

<table class="table bg-light">

  <thead>
    <tr>    
      <th scope="col">marca</th>
      <th scope="col">modelo</th>
      <th scope="col">cor</th>
      <th scope="col">placa</th>
      <th scope="col">q de portas</th>
    </tr>
  </thead>

  <tbody>
    
  <?php

//recebendo varevel dados 
while ($linha= mysqli_fetch_assoc ( $dados)) {
   
   //pegando os dados da vareavel dados e colocando em novas vareaveis e colocando na tabela

   $id = $linha ['id'];
   $marca = $linha ['marca'];
   $modelo = $linha ['modelo'];
   $cor= $linha ['cor'];
   $placa= $linha ['placa'];
   $qportas= $linha ['qportas'];

    echo "
    
    <tr>
    <td>$marca</td>
    <td>$modelo</td>
    <td>$cor</td>
    <td>$placa</td>
    <td>$qportas</td> 
    <td>

    <a href='tela_de_editar.php? id=$id' class='btn btn-success'> Editar </a>

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