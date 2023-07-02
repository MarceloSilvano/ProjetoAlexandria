<?php

$db = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'alexandria'
];

$conexao = mysqli_connect($db['host'],$db['user'],$db['password'],$db['database']);