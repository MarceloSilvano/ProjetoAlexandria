
<?php
  include('./phpFunctions/util.php');
 
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Alexandria</title>
</head>
<body class="Background" >
<?php 
    include('./elements/msgBox.php') //inclui a caixa de mensagens ?>
  
  <div class="navDesktop">
    <?php 
    include('./elements/navbar.php') //inclui o código do navbar ?>
  </div>


  <div class="navMobile">
    <?php include('./elements/navbarMobile.php') //inclui o código do navbar versão mobile ?>
  </div>

  <div class="container-fluid Background mt-3 row d-flex justify-content-center">
 
  <div class="row">
    <?php include('./elements/carousel.php') //inclui o carousel ?>
  </div>

  <div class="Search d-flex mt-3 rounded">
     <?php include('./elements/search.php') //inclui a barra de pesquisa ?>
  </div>
   
    <div class="row">    <?php include('./elements/tb_livros.php') //inclui os livros ?></div>
  </div>

</div>
</body>
</html>