<?php
$servename = "localhost"; //padrão - server local
$database = "curso_stoque"; //nome do banco de dados
$username = "root"; //padrão
$password = ""; //senha para conexão

$conexao = mysqli_connect( $servename, $username, $password, $database);
