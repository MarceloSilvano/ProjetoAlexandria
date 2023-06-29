<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Alexandria</title>
</head>
<body class="myBackground">
  <div class="navDesktop">
    <?php include('./elements/navbar.php') //inclui o código do navbar na pasta 'elements' ?>
  </div>

  <div class="navMobile">
    <?php include('./elements/navbarMobile.php') //inclui o código do navbar na pasta 'elements' ?>
  </div>


  <div class="container-fluid myBackground mt-3 row d-flex justify-content-center">
 
  <div class="row">
    <?php include('./elements/carousel.php') //inclui o carousel na pasta 'elements' ?>
  </div>

  <div class="mySearch d-flex mt-3 rounded">
     <?php include('./elements/search.php') //inclui o card na pasta 'elements' ?>
  </div>


    
   
    <div class="row">    <?php include('./elements/card.php') //inclui o card na pasta 'elements' ?></div>




  </div>
</body>
</html>