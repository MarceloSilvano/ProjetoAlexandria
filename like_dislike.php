<?php
include('./phpFunctions/conexao.php');
// Obtém o ID do livro a ser atualizado
$idLivro = $_POST['livro_id'];

// Obtém o tipo de ação (like ou dislike)
$acao = $_POST['acao'];

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

//captura os dados restantes
$idLike = uniqid();
$idUser = $_SESSION['login'];

//verifica se o usuario já deu like antes
$verificaSQL = "SELECT * FROM tb_likes WHERE id_user = '$idUser' AND id_livro = '$idLivro'";
$verificaQuery = mysqli_query($conexao, $verificaSQL);
$verificaAssoc = mysqli_fetch_assoc($verificaQuery);


// Atualiza o contador de likes ou dislikes
if ($acao === 'like') {
    if($verificaQuery->num_rows>0){
        if($verificaAssoc['tipo']==0){
            $sql = "UPDATE tb_livros SET likes = likes + 1, dislikes = dislikes - 1 WHERE id = '$idLivro'";
            $sqlLike = "UPDATE tb_likes SET tipo = 1 WHERE id_livro = '$idLivro' AND id_user = '$idUser'";
        }
    }else{
        $sql = "UPDATE tb_livros SET likes = likes + 1 WHERE id = '$idLivro'";
        $sqlLike = "INSERT INTO tb_likes VALUES('$idLike','$idUser','$idLivro',1)";
    }
} elseif ($acao === 'dislike') {
    if($verificaQuery->num_rows>0){
        if($verificaAssoc['tipo']==1){
            $sql = "UPDATE tb_livros SET dislikes = dislikes + 1, likes = likes - 1 WHERE id = '$idLivro'";
            $sqlLike = "UPDATE tb_likes SET tipo = 0 WHERE id_livro = '$idLivro' AND id_user = '$idUser'";
        }
    }else{
        $sql = "UPDATE tb_livros SET dislikes = dislikes + 1 WHERE id = '$idLivro'";
        $sqlLike = "INSERT INTO tb_likes VALUES('$idLike','$idUser','$idLivro',0)";
    }
}

//relaciona o like ao usuario
$query = mysqli_query($conexao,$sqlLike);


// Executa a consulta SQL
if ($conexao->query($sql) === TRUE) {
    // Consulta o contador atualizado de likes e dislikes
    $consulta = "SELECT likes, dislikes FROM tb_livros WHERE id = '$idLivro'";
    $resultado = $conexao->query($consulta);
    $dados = $resultado->fetch_assoc();

    // Retorna os contadores em formato JSON
    echo json_encode($dados);
} else {
    echo "Erro ao registrar ação: " . $conexao->error;
}

?>