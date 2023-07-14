
<?php
  include('./phpFunctions/conexao.php');
  if(isset($_SESSION['login'])){
    if($_SESSION['msgLogin']==true){
      include('./elements/alert-login.php');
      $_SESSION['msgLogin'] = false;
    }
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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

  <div class="container-fluid Background row d-flex justify-content-center mt-5">


  <form action="./phpActions/criarUsuario.php" class="needs-validation" style="width:400px" method="POST" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="username " class="form-label">Nome de usuário:</label>
    <input type="text" class="form-control" id="username" min="8" max="20" placeholder="marcelo123" name="username" required>
    <span style="color:red;font-size:12px"  id="username-status" ></span>
    <span style="color:red;font-size:12px"  id="username-length" ></span>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="email" placeholder="marcelo@email.com" name="email" required>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="pwd" placeholder="senha123" name="pswd" required>
  </div>
  <div class="mb-3">
    <label for="pwd-repeat" class="form-label">Repetir a senha:</label>
    <input type="password" class="form-control" id="pwd-repeat" placeholder="senha123" name="pswd-repeat" required>
  </div>
  <div class="mb-3">
    <label for="foto" class="form-label">Foto de perfil:</label>
    <input type="file" class="form-control" name="file">
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-light btnNav m-2" style="width:150px;height:45px">Criar conta</button>
  </div>
</form>

<script>
$(document).ready(function() {
  $('#username').keyup(function() {
    var username = $(this).val();
    $.ajax({
      url: 'check_username.php',
      type: 'POST',
      data: { username: username },
      success: function(response) {
        if (response == '1') {
          $('#username-status').text('Esse nome de usuário já está sendo utilizado');
          $('#username').addClass('invalid1');

        } else {
          $('#username-status').text('');
          $('#username').removeClass('invalid1');
          form.find('#username').addClass('is-invalid');
          $('#username').removeClass('was-validated');
        }
      }
    });
  });
});

$(document).ready(function() {
  $('#username').keyup(function() {
    var username = $(this).val();
    var usernameLength = username.length;
    var message = '';

    if (usernameLength < 8 || usernameLength > 20) {
      message = 'O nome de usuário deve ter entre 8 e 20 caracteres.';
      $('#username-length').addClass('text-danger');
      $('#username').addClass('invalid');

      $('#username').removeClass('was-validated');
    } else {
      $('#username-length').removeClass('text-danger');
      $('#username').removeClass('invalid');
    }

    $('#username-length').text(message);
  });
});

// Função para validar a senha
function validatePassword(password) {
  var regex = /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9]{8,20}$/;
  return regex.test(password);
}

(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>


</div>
</body>
</html>