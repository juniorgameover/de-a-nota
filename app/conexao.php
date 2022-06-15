<?php
class Conexao {
    private $servidor = 'localhost';
    private $nomeBanco = 'db_de_a_nota';
    private $usuario = 'root';
    private $senha = '';

    public function conectar(){
        try {
            $conexao = new PDO("mysql:host=$this->servidor;dbname=$this->nomeBanco","$this->usuario","$this->senha"); 
            return $conexao;
        } catch (PDOexception $e) {
            echo "Conexão falhou ". $e->getMessage();
        }
        return $conexao;
    }
}


?>