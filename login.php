
<?php
  include('./phpFunctions/conexao.php');
  if(isset($_SESSION['login'])){
    if($_SESSION['msgLogin']==true){
      include('./elements/alert-login.php');
      $_SESSION['msgLogin'] = false;
    }
  }

  if(isset($_SESSION['erro'])){
    $classError = "was-validated";
  }

  if(isset($_SESSION['login'])){
    header('location:index.php');
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

  <div class="container-fluid Background row d-flex justify-content-center loginBox">


  <form action="./phpActions/logar.php" class="<?php echo $classError ?>" style="width:400px" method="POST">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label ">Nome de usuário:</label>
            <input type="text" class="form-control" id="email" placeholder="marcelo123" name="user" required>
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="pwd" placeholder="senha123" name="pswd" required>
          </div>
            <div class="d-flex justify-content-center">
            <button href="index.php" class="btn btn-light btnNav m-2" style="width:150px;height:45px">Nova conta</button>
            <button type="submit" class="btn btn-light btnNav m-2" style="width:150px;height:45px">Login</button>
            </div>
              </div>

      </form>
</div>
</body>
</html>