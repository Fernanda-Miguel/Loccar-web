<?php 

//seção iniciada
session_start();

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

    <br>  
    <br>
    <br>  
    <br>

<section class="container corPrimaria" style="max-width: 360px; border-radius: 5px;">
    
    <br>  
    <br>
    <p class="fs-1 text-white text-center">Cadastrar Usuário</p>
    <br>
    <br>

        <form method="post" action="../controller/cadastrar_usuario.php">
            
          <div class="mb-3">
            <input required name="email" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Email:" autofocus>    
          </div>
          <div class="mb-3">
            <input required name="senha" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Senha:">    
          </div>
          
       
          <div class="d-grid gap-2 col-6 mx-auto">

            <input type="submit" class="btn corSecundaria text-white"  name="submit" id="submit" type="submit" value="Cadastrar">
             
          </div>
            
          </form>

          <br>
          <br>
      </section>

      <div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
      </div>

  <footer class="corPrimaria">
   <br>
    <p class="text-center text-white">© 2022 Loc Car Company, Inc</p>
    <p class="text-center text-white">Sistema web desenvolvido por Fernanda Miguel & Claudete Maria</p>
   <br>
  </footer>

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