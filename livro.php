<?php
  include('./phpFunctions/conexao.php');
  if(isset($_GET['id'])){
    $livro = new livro($_GET['id']);

    if($livro->getAudio()==1){
      $downloadAudio="";
    }else{
      $downloadAudio= "display:none;";
    }

    contar_visualizacao($livro->getId(),$conexao);

   /* $idLivro = $_GET['id'];
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
  */}/*

  //contar views
  contar_visualizacao($idLivro,$conexao);

  //calcula porcentagem de like
  $likes = $livro['likes'];
  $dislikes = $livro['dislikes'];
  $total = $likes+$dislikes;
  $percLike = $likes/$total*100;
  $percLike = round($percLike,2);
  $percDislike = 100-$percLike;*/
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
    <title><?php echo $livro->getTitulo() ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Função para registrar ação de like ou dislike
            function registrarAcao(livro_id, acao) {
                $.ajax({
                    url: "like_dislike.php",
                    type: "POST",
                    data: {
                        livro_id: livro_id,
                        acao: acao
                    },
                    success: function(response) {
                        // Atualiza os contadores de likes e dislikes na página
                        var dados = JSON.parse(response);
                        $("#likes").text(dados.likes);
                        $("#dislikes").text(dados.dislikes);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Evento de clique no botão de like
            $("#btn-like").click(function() {
                var livro_id = $("#livro-id").val();
                registrarAcao(livro_id, "like");
            });

            // Evento de clique no botão de dislike
            $("#btn-dislike").click(function() {
                var livro_id = $("#livro-id").val();
                registrarAcao(livro_id, "dislike");
            });
        });
        $(document).ready(function() {
            // Função para registrar ação de like ou dislike
            function registrarAcao(livro_id, acao) {
                $.ajax({
                    url: "like_dislike.php",
                    type: "POST",
                    data: {
                        livro_id: '<?php echo $livro->getId() ?>',
                        acao: acao
                    },
                    success: function(response) {
                        // Atualiza os contadores de likes e dislikes na página
                        var dados = JSON.parse(response);
                        $("#likes").text(dados.likes);
                        $("#dislikes").text(dados.dislikes);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Evento de clique no botão de like
            $("#btn-like").click(function() {
                var livro_id = $("#livro-id").val();
                registrarAcao(livro_id, "like");
            });

            // Evento de clique no botão de dislike
            $("#btn-dislike").click(function() {
                var livro_id = $("#livro-id").val();
                registrarAcao(livro_id, "dislike");
            });
        });

        $(document).ready(function() {
            // Função para atualizar contagem de likes e dislikes
            function atualizarContagem(livro_id) {
                $.ajax({
                    url: "obter_contagem.php",
                    type: "POST",
                    data: {
                        livro_id: livro_id
                    },
                    success: function(response) {
                        var dados = JSON.parse(response);
                        $("#likes-btn").text("Likes (" + dados.likes + ")");
                        $("#dislikes-btn").text("Dislikes (" + dados.dislikes + ")");
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Obtém o ID do livro ao carregar a página e atualiza a contagem
            var livro_id = $("#livro-id").val();
            atualizarContagem(livro_id);
        });
    </script>
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
  <div class="col-sm-4">
      <img class="pagLivro" src="./phpActions/uploadsCapa/<?php echo $livro->getId() ?>.jpg" alt="">
      <p style="font-size:12px;margin:none">Postado dia <?php echo $livro->getDataPost(1) ?> por <a href="./user.php?user=<?php echo $livro->getUserPost() ?>"> <?php echo $livro->getUserPost() ?></a></p>
      <div class="progress">
    
    </div>
      <button class="btn btn-light btnNav" id='btn-like'><img class="iconBtn" src="./assets/png/like.png" alt=""><span id='likes'><?php echo $livro->getLikes()?></span></button>
      <button class="btn btn-light btnNav" id='btn-dislike'><img class="iconBtn" style="transform: rotate(180deg);" src="./assets/png/like.png" alt=""><span id='dislikes'><?php echo $livro->getDislikes()?></span></button>
  </div>
  <div class="col-sm-4">
  <h2><?php echo $livro->getTitulo();?></h2>
    <p><strong>Título: </strong><br><?php echo $livro->getTitulo() ?><br>
    <strong>Autor: </strong><br><?php echo $livro->getAutor() ?><br>
    <strong>Ano: </strong><br><?php echo $livro->getAno() ?><br>
    <strong>Formato: </strong><br>.pdf</p>
    <strong>Visualizações: </strong><br><?php echo $livro->getViews()+1 ?></p>
    <strong>Descrição: </strong><br><?php echo $livro->getDescricao() ?></p>

    <a href="./phpActions/uploadsPdf/<?php echo $livro->getId() ?>.pdf" target="_blank"><button class="btn btn-light btnNav"><img class="iconBtn"  src="./assets/png/readIcon.png" alt="">Ler Online</button></a>
    <a href="./phpActions/uploadsPdf/<?php echo $livro->getId() ?>.pdf" download><button class="btn btn-light btnNav"><img class="iconBtn"  src="./assets/png/downloads.png" alt="">Baixar PDF</button></a>
    <a href="./phpActions/uploadsAudio/<?php echo $livro->getAudio()?>" download><?php echo $livro->audioDownload()?></a>
  </div>
</div>
  </div>

  
</body>
</html>