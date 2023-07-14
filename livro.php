<?php
  include('./phpFunctions/conexao.php');
  if(isset($_GET['id'])){
    $idLivro = $_GET['id'];
    $sql = "SELECT * FROM `tb_livros` WHERE id='$idLivro'";
    $query = mysqli_query($conexao,$sql);
    
    if($query->num_rows>0){
      $livro = mysqli_fetch_assoc($query);
      $dataPost = explode('-',$livro['dataPost']);
      $dataPost = $dataPost['2']."/".$dataPost['1']."/".$dataPost['0'];

      if($livro['audio']==1){
        $downloadAudio="";
      }else{
        $downloadAudio= "display:none;";
      }
    }else{
      echo "<h3>Livro não encontrado</h3>";
      $livro = NULL;
    }
  }else{
    header('location:./index.php');
  }
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

  <div class="container mt-3">


  <div class="row">
  <div class="col-sm-3">
      <img class="pagLivro" src="./phpActions/uploadsCapa/<?php echo $livro['id'] ?>.jpg" alt="">
      <p style="font-size:12px;margin:none">Postado dia <?php echo $dataPost ?> por <a href="./user.php?user=<?php echo $livro['usuarioPost'] ?>"> <?php echo $livro['usuarioPost'] ?></a></p>
  </div>
  <div class="col-sm-4">
  <h2><?php echo $livro['titulo']?></h2>
    <p><strong>Título: </strong><br><?php echo $livro['titulo'] ?><br>
    <strong>Autor: </strong><br><?php echo $livro['autor'] ?><br>
    <strong>Ano: </strong><br><?php echo $livro['ano'] ?><br>
    <strong>Formato: </strong><br>.pdf</p>
    <strong>Descrição: </strong><br><?php echo $livro['descricao'] ?></p>
    <button class="btn btn-light btnNav"><img class="iconBtn"  src="./assets/png/downloads.png" alt="">Baixar PDF</button>
    <button class="btn btn-light btnNav" style ="<?php echo $downloadAudio ?>"><img class="iconBtn"  src="./assets/png/downloads.png" alt="">Baixar Audio</button>
  </div>
</div>
  </div>

  
</body>
</html>