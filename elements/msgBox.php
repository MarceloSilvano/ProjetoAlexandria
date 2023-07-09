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
