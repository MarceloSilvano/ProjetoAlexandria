<?php
include('../phpFunctions/util.php');
$user = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['pswd'];
$senhaR = $_POST['pswd-repeat'];

$sqlUser = "SELECT * from tb_users WHERE username='$user'";
$queryUser = mysqli_query($conexao, $sqlUser);

$sqlEmail = "SELECT * from tb_users WHERE email='$email'";
$queryEmail = mysqli_query($conexao, $sqlEmail);

$valido = true;

//validação do usuário
if(strlen($user)<=8||strlen($user)>=20){
    $valido = false;
    echo "Usuario precisa ter de 8 a 20 caracteres<br>";
}

$regex = "/^[a-zA-Z0-9_]{8,20}$/";
if(!preg_match($regex, $user)){
    $valido =false;
    echo "Nome de usuario não pode conter caracteres especiais<br>";
}

if($queryUser->num_rows<>0){
    $valido=false;
    echo "O nome de usuário já existe<br>";
}

//verifica o email
$verificaEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

if($verificaEmail==false){
    $valido=false;
    echo "Email invalido<br>";
}

if($queryEmail->num_rows<>0){
    $valido=false;
    echo "Já existe um usuário com esse email<br>";
}


//verifica a senha
if(strlen($senha)<8||strlen($senha)>20){
    $valido = false;
    echo "Senha precisa ter de 8 a 20 caracteres<br>";
}

if($senha<>$senhaR){
    $valido = false;
    echo "As senhas precisam ser iguais<br>";
}

//verificar validade
if($valido==true){
    echo "true";
}else{
    echo "false";
}

if($valido==true){
    $senha = md5($senha);
    $sqlCreate = "INSERT INTO tb_users (username, password, email, foto, qntLivros, dataCriacao) VALUES ('$user','$senha','$email',NULL,0,'".date('Y-m-d')."')";
    $queryCreate = mysqli_query($conexao,$sqlCreate);
    header('location:../login.php');
}else{
    $_SESSION['cadastroErro']=true;
    header('location:../cadastrar.php');

}
echo $sqlCreate;
if(mysqli_affected_rows($conexao)>0){
    echo "conta criada com sucesso"; 
    $_SESSION['cadastroConcluido']=true;

}else{
    echo "erro ao criar nova conta";
    header('location:../cadastrar.php');

}
?>