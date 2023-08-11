<?php

$db = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'alexandria'
];

$conexao = mysqli_connect($db['host'],$db['user'],$db['password'],$db['database']);

include('classes.php');

if(!isset($_SESSION)){
    session_start();
}

//validação do usuário
function validate_user($user,$query_user){
    $valido=true;
    if(strlen($user)<8||strlen($user)>20){
        $valido = false;
        $error = "Usuario precisa ter de 8 a 20 caracteres<br>";
    }
    
    $regex = "/^[a-zA-Z0-9_]{8,20}$/";
    if(!preg_match($regex, $user)){
        $valido =false;
        $error = "Nome de usuario não pode conter caracteres especiais<br>";
    }
    
    if($query_user->num_rows<>0){
        $valido=false;
        $error = "O nome de usuário já existe<br>";
    }
    if($valido==true){
        return $response = [
            'valido' => true,
            'error' => 'not error'
        ];
    }else{
        return $response = [
            'valido' => false,
            'error' => $error
        ];
    }
}

function exibir_mensagem($header,$body){
    return " <div class='toast show'>
    <div class='toast-header'>
        <strong>$header</strong>
        <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
    </div>
    <div class='toast-body'>
        $body
    </div>
</div>";
}

function contar_visualizacao($id,$conexao){
    $sql = "UPDATE tb_livros SET views = views + 1 WHERE id = '$id'";
    $query = mysqli_query($conexao, $sql);
}
?>