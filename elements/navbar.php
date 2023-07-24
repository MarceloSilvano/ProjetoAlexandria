<!--Navbar Inicio-->
<?php
 if(isset($_SESSION['login'])){
    $linkUserIcon = " data-bs-toggle='dropdown'";
    $linkUpload = './upload.php';

    $username = $_SESSION['login'];
    $sqlUser = "SELECT * FROM `tb_users` WHERE username = '$username'";
    $queryUser = mysqli_query($conexao,$sqlUser);
    $userData = mysqli_fetch_assoc($queryUser);

    if($userData['foto']<>NULL&&file_exists('./phpActions/uploadsFoto/'.$userData['foto'])){
      $iconUser = './phpActions/uploadsFoto/'.$userData['foto'];
    }else{
      $iconUser = "./assets/png/iconUser.png";
    }
 }else{
  $linkUpload = './login.php';
  $linkUserIcon = " data-bs-toggle='modal' data-bs-target='#loginModal'";
  $iconUser = "./assets/png/iconUser.png";
 }
?>
<nav class="navbar navbar-expand-sm navbar-dark Navbar">
        <div class="container-fluid">
          <div>
            <a class="navbar-brand" href="index.php"><img class="Logo" src="./assets/png/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <button class="BtnMenu"><img class="IconMenu"  src="./assets/png/menu.png" data-bs-toggle="offcanvas" data-bs-target="#offcanva"></button>
          </div>
          <img class="row d-flex justify-content-center" style="width:464px;" src="./assets/png/banner.png" alt="">
          <div>
            <div class="dropdown UserOptDiv">
               <a href="<?php echo $linkUpload ?>"> <button class="btn btn-light btnNav"><img class="iconBtn"  src="./assets/png/book.png" alt="">Enviar livro</button></a>
                <img class="IconUser" <?php echo $linkUserIcon ?>style="border-radius:50%" src="<?php echo $iconUser ?>" alt="">
                <ul class="dropdown-menu Background">
                  <li><a class="dropdown-item Color" href="#"><img class="iconBtn" src="./assets/png/account.svg" alt=""> Minha conta</a></li>
                  <li><a class="dropdown-item Color" href="#"><img class="iconBtn" src="./assets/png/config.svg" alt=""> Configurações</a></li>
                  <li><a class="dropdown-item Color" href="./phpActions/logout.php"><img class="iconBtn" src="./assets/png/logout.svg" alt=""> Sair</a></li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
  <!--Navbar Fim-->

  <!--Sidebar Inicio-->
    <div class="offcanvas offcanvas-start Background" style="width: 300px;" id="offcanva"> <!--style direito necessário-->
      <div class="offcanvas-header">
        <h1 class="Color">Menu</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <hr>
      <div class="offcanvas-body Background Color">
        <div class="Sidebar">
          <button class="BtnSide">Início</button><br>
          <button class="BtnSide">Sobre o Projeto</button><br>
          <button class="BtnSide">Enviar Livro</button><br>
          <button class="BtnSide">Contribua</button><br>
          <button class="BtnSide">Contato</button><br>
        </div>
        <hr>
        <div class="Categorias Background">
          <h4 class="Color">Categorias</h4>
          <ul>
            <?php include('tb_categorias.php') ?>
          </ul>
        </div>
      </div>
    </div>
  <!--Sidebar Fim-->

<!-- Modal de login -->
<div class="modal" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="./phpActions/logar.php" method="POST">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Nome de usuário ou e-mail:</label>
            <input type="text" class="form-control" id="email" placeholder="marcelo@email.com" name="user">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="pwd" placeholder="senha123" name="pswd">
          </div>
            <p>Ainda não possui uma conta? <a href="./cadastrar.php">Crie uma aqui</a></p>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-light btnNav">Login</button>
              </div>
      </form>
     
    </div>
  </div>
</div>
