<div class="msgBox">
    <?php if(!isset($_SESSION['start'])){
        echo exibir_mensagem("Bem vindo(a)!","Não repare a bagunça! Nosso site está em desenvolvimento :)");
        $_SESSION['start']=true;
    } 

     if(isset($_SESSION['cadastroConcluido'])&&$_SESSION['cadastroConcluido']==true){
            echo exibir_mensagem("Parabéns!","Sua conta foi criada com sucesso");
            $_SESSION['cadastroConcluido']=false;
        }

     if(isset($_SESSION['cadastroErro'])&&$_SESSION['cadastroErro']==true){
            echo exibir_mensagem("Erro!","Houve um erro ao criar sua conta, tente novamente");
            $_SESSION['cadastroErro']=false;
        } 
     if(isset($_SESSION['login'])){
        if($_SESSION['msgLogin']==true){
            echo exibir_mensagem('Você está logado!',$_SESSION['login']);
            $_SESSION['msgLogin'] = false;
        }
      }
    ?>
</div>
