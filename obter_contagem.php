<?php
include('./phpFunctions/conexao.php');
// Consulta a contagem atual de likes e dislikes
$sql = "SELECT likes, dislikes FROM tb_livros WHERE id = '$livro_id'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $dados = $result->fetch_assoc();
    echo json_encode($dados);
} else {
    // Caso o livro não seja encontrado, retorna zeros para likes e dislikes
    echo json_encode(array('likes' => 0, 'dislikes' => 0));
}

?>