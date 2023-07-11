<?php
include('../phpFunctions/conexao.php');
$user = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['pswd'];
$senhaR = $_POST['pswd-repeat'];

$sqlUser = "SELECT * from tb_users WHERE username='$user'";
$queryUser = mysqli_query($conexao, $sqlUser);

$sqlEmail = "SELECT * from tb_users WHERE email='$email'";
$queryEmail = mysqli_query($conexao, $sqlEmail);

$valido = true;

//validação do usuário
$validacaoUsuario = validate_user($user,$queryUser);
if($validacaoUsuario['valido']==false){
    $valido = false;
    echo $validacaoUsuario['error'];
}

//verifica o email
$verificaEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

if($verificaEmail==false){
    $valido=false;
    echo "Email invalido<br>";
}

if($queryEmail->num_rows<>0){
    $valido=false;
    echo "Já existe um usuário com esse email<br>";
}


//verifica a senha
if(strlen($senha)<8||strlen($senha)>20){
    $valido = false;
    echo "Senha precisa ter de 8 a 20 caracteres<br>";
}

if($senha<>$senhaR){
    $valido = false;
    echo "As senhas precisam ser iguais<br>";
}

//upload da foto
 // Diretório de destino
 if(isset($_FILES['file'])){

     $uploadDir = 'uploadsFoto/';
 
     // Verifica se o diretório de destino existe, caso contrário, cria-o
     if (!is_dir($uploadDir)) {
     mkdir($uploadDir, 0777, true);
     }
 
     // Obtém o nome original do arquivo
     $fileName = $_FILES['file']['name'];
 
     // Obtém a extensão do arquivo
     $extension = pathinfo($fileName, PATHINFO_EXTENSION);
 
     // Define o novo nome do arquivo com base no nome do usuário
     $newFileName = $user . '.' . $extension;
 
     // Caminho completo do arquivo de destino
     $uploadPath = $uploadDir . $newFileName;
 
     // Verifica se o arquivo é uma imagem válida
     $validExtensions = ['png', 'jpg', 'jpeg'];
     if (in_array(strtolower($extension), $validExtensions)) {
     // Move o arquivo para o diretório de destino
     if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
         echo 'Upload realizado com sucesso!';
     } else {
         echo 'Ocorreu um erro ao realizar o upload do arquivo.';
     }
     } else {
     echo 'Apenas arquivos PNG, JPG e JPEG são permitidos.';
     }


 }

//verifica se há foto
$auxFoto = explode('.',$nomeFoto);
if(isset($auxFoto[1])){
    $nomeFoto="'".$newFileName."'";
}else{
    $nomeFoto="NULL";
}

//verificar validade
if($valido==true){
    echo "true";
}else{
    echo "false";
}



if($valido==true){
    $senha = md5($senha);
    $sqlCreate = "INSERT INTO tb_users (username, password, email, foto, qntLivros, dataCriacao) VALUES ('$user','$senha','$email',$nomeFoto,0,'".date('Y-m-d')."')";
    $queryCreate = mysqli_query($conexao,$sqlCreate);
    //header('location:../login.php');
}else{
    $_SESSION['cadastroErro']=true;
    //header('location:../cadastrar.php');

}
echo $sqlCreate;
if(mysqli_affected_rows($conexao)>0){
    echo "conta criada com sucesso"; 
    $_SESSION['cadastroConcluido']=true;

}else{
    echo "erro ao criar nova conta";
   //header('location:../cadastrar.php');

}
?>