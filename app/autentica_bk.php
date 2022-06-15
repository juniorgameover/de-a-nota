<?php

$pdo = new PDO('mysql:localhost;dbname=db_curso_web','root','');
$stmt = $pdo->query('select * from tb_cursos');
$resultado = $stmt->fetchAll();
print_r($resultado);





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


