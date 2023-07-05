<?php
include('./phpFunctions/util.php');

$sql = "SELECT * FROM `tb_categorias`";
$query = mysqli_query($conexao, $sql);

while($row = mysqli_fetch_assoc($query)){
    echo "<li><a href='#'>".$row['categoria']."</a></li>";
}
