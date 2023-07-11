
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
<?php include('./elements/msgBox.php') //inclui a caixa de mensagens ?>
  <div class="navDesktop">
    <?php 
    include('./elements/navbar.php') //inclui o código do navbar ?>
  </div>


  <div class="navMobile">
    <?php include('./elements/navbarMobile.php') //inclui o código do navbar versão mobile ?>
  </div>
  <div class="container">
    <h1>Enviar Livro</h1>
    <p>* Campo obrigatório</p>
    <hr>
    <form action="./phpActions/addLivro.php" method="POST">
      <div class="mb-3">
        <label for="titulo" class="form-label">Título:*</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
      </div>
      <div class="mb-3">
        <label for="autor" class="form-label">Autor:*</label>
        <input type="text" class="form-control" id="autor" name="autor" required>
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao"></textarea>
      </div>
      <div class="mb-3">
        <label for="ano" class="form-label">Ano:</label>
        <input type="number" class="form-control" maxlength="4" id="ano" name="ano">
      </div>
      <div class="mb-3">
        <label for="pdf" class="form-label">Capa:</label>
        <input type="file" class="form-control" id="capa" name="capa">
      </div>
      <div class="mb-3">
        <label for="pdf" class="form-label">PDF:*</label>
        <input type="file" class="form-control" id="pdf" name="pdf" require>
      </div>
      <div class="mb-3">
        <label for="audio" class="form-label">Áudio:</label>
        <input type="file" class="form-control" id="audio" name="audio">
      </div>
      <button type="submit" class="btn btn-light btnNav">Enviar</button>
    </form>
  </div>
</body>
</html>