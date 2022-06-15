<?php

$pdo = new PDO('mysql:host=localhost;dbname=db_de_a_nota','root','');
$stmt = $pdo->prepare('select * from tb_adm');
$stmt->execute();
$result = $stmt->fetchAll();

print_r($result);





/* require_once('./conexao.php');

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


