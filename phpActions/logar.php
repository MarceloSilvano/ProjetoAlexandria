<?php
include('../phpFunctions/util.php');
$usuario = $_POST['user'];
$senha = md5($_POST['pswd']);

echo $usuario."<br>";
echo $senha."<br>";

$sql = 'SELECT * FROM `tb_users` WHERE username = "'.$usuario.'"';
$query = mysqli_query($conexao,$sql);

$dbInfo = mysqli_fetch_assoc($query);

echo $dbInfo['username']."<br>";
echo $dbInfo['password'];

if($dbInfo['username']==$usuario&&$dbInfo['password']==$senha){
    $_SESSION['login'] = $usuario;
    if(isset($_SESSION['erro'])){
        unset($_SESSION['erro']);
    }
}else{
    $_SESSION['erro'] = "Login ou senha inválidos!";
}

var_dump($_SESSION['login']);


header('location:../index.php');