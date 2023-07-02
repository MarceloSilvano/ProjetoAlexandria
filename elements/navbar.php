<!--Navbar Inicio-->
<nav class="navbar navbar-expand-sm navbar-dark myNavbar myBackground">
        <div class="container-fluid">
          <div>
            <a class="navbar-brand" href="../index.php"><img class="myLogo" src="./assets/svg/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <button class="myBtnMenu"><img class="myIconMenu" src="./assets/svg/menu.png" data-bs-toggle="offcanvas" data-bs-target="#offcanva"></button>
          </div>
          <img class="row d-flex justify-content-center" style="width:464px" src="./assets/svg/banner.png" alt="">
          <div>
            <div class="dropdown myUserOptDiv myBackground">
                <button class="btn btn-light myBtn"><img class="myBookBtn" src="./assets/svg/book.png" alt="">Enviar livro</button>
                <img class="myIconUser" data-bs-toggle="dropdown" src="./assets/svg/iconUser.png" alt="">
                <ul class="dropdown-menu myBackground">
                  <li><a class="dropdown-item myColor" href="#"><img class="myBookBtn" src="./assets/svg/account.svg" alt=""> Minha conta</a></li>
                  <li><a class="dropdown-item myColor" href="#"><img class="myBookBtn" src="./assets/svg/config.svg" alt=""> Configurações</a></li>
                  <li><a class="dropdown-item myColor" href="#"><img class="myBookBtn" src="./assets/svg/logout.svg" alt=""> Sair</a></li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
  <!--Navbar Fim-->

  <!--Sidebar Inicio-->
    <div class="offcanvas offcanvas-start myBackground" style="width: 300px;" id="offcanva"> <!--style direito necessário-->
      <div class="offcanvas-header">
        <h1 class="myColor">Menu</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <hr>
      <div class="offcanvas-body myBackground myColor">
        <div class="mySidebar">
          <button class="myBtnSide">Início</button><br>
          <button class="myBtnSide">Sobre o Projeto</button><br>
          <button class="myBtnSide">Enviar Livro</button><br>
          <button class="myBtnSide">Contribua</button><br>
          <button class="myBtnSide">Contato</button><br>
        </div>
        <hr>
        <div class="myCategorias myBackground">
          <h4 class="myColor">Categorias</h4>
          <ul>
            <?php include('tb_categorias.php') ?>
          </ul>
        </div>
      </div>
    </div>
  <!--Sidebar Fim-->