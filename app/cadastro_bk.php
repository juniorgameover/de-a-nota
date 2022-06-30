<?php
require_once("./conexao.php");

/*RECUPERANDO OS DADOS DO FORMULÁRIO VIA POST*/

$nomeCompleto = $_POST['nome-completo'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$confSenha = $_POST['confirma-senha'];
$tipoUsuario = $_POST['tipo-usuario'];
$codAutorizacao = $_POST['cod-autorizacao'];

$array = [$nomeCompleto, $username, $senha, $confSenha, $tipoUsuario, $codAutorizacao];

echo "<pre>";
print_r($_POST); 
echo "</pre>";
?>