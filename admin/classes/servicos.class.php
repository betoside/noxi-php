<?php
class Servicos {

    public function getServicos()
    {
        global $pdo;
        $dados = array();

        $sql = $pdo->query("SELECT * FROM servicos");

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        }


        return false;

    }

}