<?php
// likeLivro.php

// Verifique se os dados foram enviados corretamente via POST
if (isset($_POST['idLivro']) && isset($_POST['tipo'])||1==1) {
    $idLivro = $_POST['idLivro'];
    $tipo = $_POST['tipo'];

    // Configurações de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alexandria";

    // Conecte-se ao banco de dados
    $conexao = mysqli_connect($servername, $username, $password, $dbname);

    // Verifique se a conexão foi estabelecida corretamente
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Faça o processamento necessário, atualizando o contador de likes ou dislikes no banco de dados
    $contador = ($tipo === 'like') ? 'likes' : 'dislikes';
    $query = "UPDATE tb_livros SET $contador = $contador + 1 WHERE id = '$idLivro'";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        // Obtenha a nova quantidade de likes após a atualização
        $query = "SELECT $contador FROM tb_livros WHERE id = '$idLivro'";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {
            $dados = mysqli_fetch_assoc($resultado);
            $novaQuantidade = $dados[$contador];
            echo $novaQuantidade;
        } else {
            echo "Erro ao obter a nova quantidade de $contador: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao atualizar o contador de $contador: " . mysqli_error($conexao);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
