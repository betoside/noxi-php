<?php 
        $config['secao'] = 'home';
        include 'header.php';
        include 'session_check.php';

        if (!empty($_POST) && !empty($_FILES['imagem_banner']['tmp_name'])) {
            // echo '<pre>';
            // echo '$_POST: <br>';
            // print_r($_POST);
            // echo '<br>';
            // echo isset($_POST);
            // echo '<br>';
            // echo !empty($_POST);
            // echo '<br>';
            // echo '$_FILES <br>';
            // print_r($_FILES);
            // echo '<br>';
            // print_r(count($_FILES));
            // exit;
            $carrossel = array();
    
            $carrossel['titulo'] = addslashes($_POST['titulo']);
            $carrossel['link'] = addslashes($_POST['link']);
            $carrossel['titulo'] = addslashes($_POST['titulo']);

            $extensao = explode('.', $_FILES['imagem_banner']['name']);
            $extensao = $extensao[count($extensao)-1];
            $carrossel['imagem_banner'] =  md5(time()).'.'.$extensao;
            move_uploaded_file($_FILES['imagem_banner']['tmp_name'], '../assets/img/carrosselHome/'.$carrossel['imagem_banner']);

            if (!empty($_FILES['imagem_produto']['tmp_name'])) {
                
                $extensao = explode('.', $_FILES['imagem_produto']['name']);
                $extensao = $extensao[count($extensao)-1];
                $carrossel['imagem_produto'] =  md5(time()).'.'.$extensao;
                move_uploaded_file($_FILES['imagem_produto']['tmp_name'], '../assets/img/carrosselHome/'.$carrossel['imagem_produto']);

            } else {
                $carrossel['imagem_produto'] =  '';
            }

            require 'classes/carrossel.class.php';
            $c = new Carrossel();
            $cDados = $c->cadastrar($carrossel);
            // echo '<pre>';
            // print_r($cDados);
            // exit;

        }

        ?>


        <div class="admin-body">
            
            <?php include 'menu.php'; ?>

            <div class="area-formlario">

                <form action="" method="post" enctype="multipart/form-data">

                    Título <br>
                    <input type="text" name="titulo" required> <br><br>

                    Link <br>
                    <input type="text" name="link" required> <br><br>

                    Imagem 1 (grande no fundo) <br>
                    <input type="file" name="imagem_banner" required> <br><br>


                    Imagem 2 (pequena, de produto) <br>
                    <input type="file" name="imagem_produto"> <br><br>

                    Ordem
                    <select name="ordem">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <br><br>

                    <input type="submit" value="Cadastrar" class="bt-enviar w-150">

                </form>
                
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        
        
        
