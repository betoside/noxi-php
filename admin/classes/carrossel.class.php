<?php
class Carrossel {

    public function cadastrar($array)
    {
        // id
        // titulo
        // link
        // imagem_banner
        // imagem_produto
        // ordem

        global $pdo;
        $image_produtoField = '';
        $image_produtoValue = '';

        if (!empty($array['imagem_produto'])) {
            $image_produtoField = ', imagem_produto';
            $image_produtoValue = ', :imagem_produto';
            // $image_produtoValue = $array['imagem_produto'];
        }

        $sql = "INSERT INTO sliderhome 
                            (titulo, 
                             link, 
                             imagem_banner
                             ".$image_produtoField.")
                    VALUES (
                            :titulo, 
                            :link, 
                            :imagem_banner
                            ".$image_produtoValue.")";

                            // echo '<pre>';
                            // echo $sql;
                            // echo '<br>';
                            // print_r($array['imagem_produto']);
                            // exit;

        $sql = $pdo->prepare($sql);
        $sql->bindValue(':titulo', $array['titulo']);
        $sql->bindValue(':link', $array['link']);
        $sql->bindValue(':imagem_banner', $array['imagem_banner']);
        if (isset($array['imagem_produto']) && !empty($array['imagem_produto'])) {
            $sql->bindValue(':imagem_produto', $array['imagem_produto']);
        }
        $sql->execute();

        header('Location: home.php');
        exit;

    }

    public function pegarCarrosseis()
    {
        global $pdo;
        $dados = array();
        $sql = $pdo->query("SELECT * FROM sliderhome");

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        }
        
        return false;

    }
}