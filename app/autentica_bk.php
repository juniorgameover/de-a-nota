<?php
require_once('./conexao.php');
$pdo = new Conexao; 
$result = $pdo->consultar('select * from tb_adm');
echo "<pre>";
print_r($result);
echo "</pre>";







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


