<div class="msgBox">

    <?php if(!isset($_SESSION['start'])){?>
    <div class="toast show">
        <div class="toast-header">
            <strong>Bem vindo(a)!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            Não repare a bagunça! Nosso site está em desenvolvimento :)
        </div>
    </div>
    <?php 
        $_SESSION['start']=true;
    } ?>

    <?php if(isset($_SESSION['cadastroConcluido'])&&$_SESSION['cadastroConcluido']==true){?>
        <div class="toast show">
            <div class="toast-header">
                <strong>Parabéns!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                Sua conta foi criada com sucesso, agora é só logar!
            </div>
        </div>
        <?php 
            $_SESSION['cadastroConcluido']=false;
        } ?>

<?php if(isset($_SESSION['cadastroErro'])&&$_SESSION['cadastroErro']==true){?>
        <div class="toast show">
            <div class="toast-header">
                <strong>Erro</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
              Houve um erro ao criar sua conta, por favor tente de novo
            </div>
        </div>
        <?php 
            $_SESSION['cadastroErro']=false;
        } ?>


    <?php
     if(isset($_SESSION['login'])){
        if($_SESSION['msgLogin']==true){?>
            <div class="toast show animate__backInDown">
                <div class="toast-header">
                    <strong>Você está logado!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    Bem vindo(a) <?php echo $_SESSION['login']?>
                </div>
            </div>
          <?php $_SESSION['msgLogin'] = false;
        }
      }
    ?>
</div>
