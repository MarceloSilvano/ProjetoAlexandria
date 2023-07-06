<?php
include('../phpFunctions/util.php');
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);

}

header('location:../index.php');
?>