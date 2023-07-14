<?php
include('../phpFunctions/conexao.php');
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);

}

header('location:../index.php');
?>