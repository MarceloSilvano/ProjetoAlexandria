<!--Navbar Inicio-->
<?php
 if(isset($_SESSION['user'])){
    $linkUserIcon = " data-bs-toggle='dropdown'";
 }else{
  $linkUserIcon = " data-bs-toggle='modal' data-bs-target='#loginModal'";
 }
?>
<nav class="navbar navbar-expand-sm navbar-dark Navbar">
        <div class="container-fluid">
          <div>
            <a class="navbar-brand" href="../index.php"><img class="Logo" src="./assets/png/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <button class="BtnMenu"><img class="IconMenu" src="./assets/png/menu.png" data-bs-toggle="offcanvas" data-bs-target="#offcanva"></button>
          </div>
          <img class="row d-flex justify-content-center" style="width:464px" src="./assets/png/banner.png" alt="">
          <div>
            <div class="dropdown UserOptDiv">
                <button class="btn btn-light btnNav"><img class="iconBtn" src="./assets/png/book.png" alt="">Enviar livro</button>
                <img class="IconUser" <?php echo $linkUserIcon ?> src="./assets/png/iconUser.png" alt="">
                <ul class="dropdown-menu Background">
                  <li><a class="dropdown-item Color" href="#"><img class="iconBtn" src="./assets/png/account.svg" alt=""> Minha conta</a></li>
                  <li><a class="dropdown-item Color" href="#"><img class="iconBtn" src="./assets/png/config.svg" alt=""> Configurações</a></li>
                  <li><a class="dropdown-item Color" href="#"><img class="iconBtn" src="./assets/png/logout.svg" alt=""> Sair</a></li>
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
      <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Nome de usuário ou e-mail:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-light btnNav">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
