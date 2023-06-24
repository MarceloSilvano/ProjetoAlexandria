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
                  <li><a class="dropdown-item myColor" href="#"><img class="myBookBtn" src="./assets/svg/account.png" alt=""> Minha conta</a></li>
                  <li><a class="dropdown-item myColor" href="#"><img class="myBookBtn" src="./assets/svg/config.png" alt=""> Configurações</a></li>
                  <li><a class="dropdown-item myColor" href="#"><img class="myBookBtn" src="./assets/svg/logout.png" alt=""> Sair</a></li>
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
            <li><a href="#">Ficção científica</a></li>
            <li><a href="#">Fantasia</a></li>
            <li><a href="#">Romance</a></li>
            <li><a href="#">Mistério</a></li>
            <li><a href="#">Suspense</a></li>
            <li><a href="#">Thriller psicológico</a></li>
            <li><a href="#">Terror</a></li>
            <li><a href="#">Ação e aventura</a></li>
            <li><a href="#">Histórico</a></li>
            <li><a href="#">Biografia</a></li>
            <li><a href="#">Autobiografia</a></li>
            <li><a href="#">Poesia</a></li>
            <li><a href="#">Conto</a></li>
            <li><a href="#">Drama</a></li>
            <li><a href="#">Comédia</a></li>
            <li><a href="#">Fábula</a></li>
            <li><a href="#">Livros infantis</a></li>
            <li><a href="#">Livros juvenis</a></li>
            <li><a href="#">Autoajuda</a></li>
            <li><a href="#">Desenvolvimento pessoal</a></li>
            <li><a href="#">Espiritualidade</a></li>
            <li><a href="#">Filosofia</a></li>
            <li><a href="#">Ciência</a></li>
            <li><a href="#">Matemática</a></li>
            <li><a href="#">História</a></li>
            <li><a href="#">Arte e fotografia</a></li>
            <li><a href="#">Negócios e empreendedorismo</a></li>
            <li><a href="#">Economia</a></li>
            <li><a href="#">Política</a></li>
            <li><a href="#">Sociedade e cultura</a></li>
            <li><a href="#">Saúde e bem-estar</a></li>
            <li><a href="#">Alimentação e culinária</a></li>
            <li><a href="#">Viagens</a></li>
            <li><a href="#">Esportes</a></li>
            <li><a href="#">Guias e manuais técnicos</a></li>
            <li><a href="#">Ficção histórica</a></li>
            <li><a href="#">Literatura clássica</a></li>
            <li><a href="#">Teatro</a></li>
            <li><a href="#">Ciência da computação</a></li>
            <li><a href="#">Ficção distópica</a></li>
          </ul>
        </div>
      </div>
    </div>
  <!--Sidebar Fim-->