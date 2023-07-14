<?php
include('../phpFunctions/conexao.php');
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Verifica se os campos obrigatórios foram preenchidos
  if (!empty($_POST['titulo']) && !empty($_POST['autor']) && !empty($_FILES['pdf'])) {

    // Verifica se a conexão foi estabelecida corretamente
    if ($conexao->connect_error) {
      die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Gera um ID único
    $id = uniqid();

    // Nomeia os arquivos PDF e Áudio com o ID
    $pdfFile = $id . '.pdf';
    $audioFile = $id . '.mp3';
    $capaFile = $id . '.jpg';

    // Move os arquivos para o diretório desejado (substitua "caminho/para/diretorio" pelo caminho correto)
    move_uploaded_file($_FILES['pdf']['tmp_name'], 'uploadsPdf/' . $pdfFile);
    move_uploaded_file($_FILES['audio']['tmp_name'], 'uploadsAudio/' . $audioFile);
    move_uploaded_file($_FILES['capa']['tmp_name'], 'uploadsCapa/' . $capaFile);
    
    //Define as informações automaticas
    $usuarioPost = $_SESSION['login'];
    $dataPost = date('Y-m-d');

    // Prepara a consulta SQL
    $sql = "INSERT INTO tb_livros (id, titulo, autor, descricao, ano, pdf, audio, usuarioPost, dataPost) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)";
    $stmt = $conexao->prepare($sql);

    // Define os parâmetros da consulta
    $stmt->bind_param("ssssissss", $id, $_POST['titulo'], $_POST['autor'], $_POST['descricao'], $_POST['ano'], $pdfFile, $audioFile, $usuarioPost, $dataPost);

    // Executa a consulta
    if ($stmt->execute()) {
      echo "Livro inserido com sucesso!";
      header('location:../index.php');
      $_SESSION['msgLivroAdd'] == true;
    } else {
      echo "Erro ao inserir o livro: " . $stmt->error;
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conexao->close();
  } else {
    header('location:../index.php');
    echo "Por favor, preencha todos os campos obrigatórios.";
  }
}
?>
