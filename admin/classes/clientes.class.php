<?php
class Clientes {

    public function pegarClientes()
    {
        global $pdo;
        $dados = array();
        $sql = $pdo->query("SELECT * FROM clientes");

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        }
        
        return false;

    }

    public function cadastrar($imagem)
    {
        if (!empty($imagem['imagem_cliente'])) {
            global $pdo;
            $pdo->query("INSERT INTO clientes (nome) VALUES ('".$imagem['imagem_cliente']."')");
            return true;
        }

        return false;
    }

}