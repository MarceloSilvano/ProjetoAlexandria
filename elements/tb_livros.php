<?php

$sql = "SELECT * FROM `tb_livros` ORDER BY titulo DESC";
$query = mysqli_query($conexao, $sql);
?>