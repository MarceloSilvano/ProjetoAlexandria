<?php
// Conexão com o banco de dados (substitua pelas suas próprias configurações)
$servername = 'localhost';
$usernamedb = 'root';
$password = '';
$dbname = 'alexandria';

// Recebe o valor do campo "username" via POST
$username = $_POST['username'];

// Conecta ao banco de dados
$conn = new mysqli($servername, $usernamedb, $password, $dbname);

// Verifica se houve um erro na conexão
if ($conn->connect_error) {
  die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

// Prepara a consulta SQL para verificar se o username já existe
$stmt = $conn->prepare('SELECT COUNT(*) FROM tb_users WHERE username = ?');
$stmt->bind_param('s', $username);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

// Retorna o resultado (1 se o username já existe, 0 caso contrário)
echo $count;

// Fecha a conexão com o banco de dados
$conn->close();
?>