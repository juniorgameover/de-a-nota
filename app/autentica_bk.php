<?php
require_once('./conexao.php');

$username = $_POST['usuario'];
$senha = $_POST['senha'];
$usuarioValido = false;

$buscaUsuarioSenha = "SELECT * FROM tb_adm WHERE username='$username' AND senha='$senha' ";

$pdo = new Conexao; 
$result = $pdo->consultar($buscaUsuarioSenha);

if($result == null){
    header('location:../index.php');

} elseif ($result[0]['username'] == $username && $result[0]['senha'] == $senha) {
    $usuarioValido = true;
    echo"usuário logado";
}
 
echo "<pre>";
print_r($usuarioValido);
echo "</pre>";


/*
$pdo = new Conexao; 
$result = $pdo->consultar('select * from tb_adm');
echo "<pre>";
print_r($username);
print_r($senha);
echo "</pre>";

*/





/*$pdo = new Conexao;
$conexao = $pdo->conectar();
$stmt = $conexao->prepare('select * from tb_adm');
$stmt->execute();
$result = $stmt->fetchAll();

print_r($result);
*/




/* 

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conexao = new Conexao();
$conectado = $conexao->conectar();

try {
    $stmt = $conectado->query("select * from tb_adm");
    $resultado = $stmt->fetchAll();
} catch (Exception $e) {
    echo "$e->getMessage()";
}

print_r($resultado);*/


