<?php
include('./conexao.php');


$username = $_POST['usuario'];
$senha = $_POST['senha'];


$buscaUsuarioAdm = "SELECT * FROM tb_adm WHERE username='$username' AND senha='$senha' ";
$buscaUsuarioJurado = "SELECT * FROM tb_jurados WHERE username='$username' AND senha='$senha' ";

$pdo = new Conexao; 
$resultAdm = $pdo->consultar($buscaUsuarioAdm);
$resultJurado = $pdo->consultar($buscaUsuarioJurado);

if($resultAdm){
    echo "usuario adm localizado";
    session_start();
    $_SESSION['username'] = $username;
    header('location:../resultados.php');
}elseif($resultJurado){
    echo "usuario jurado localizado";
    header('location: dar_nota.php');
} else {
    header('location:../index.php?invalido=1'); ;
}