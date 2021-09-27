<?php
        $config['secao'] = 'clientes';
        include 'header.php';
        include 'session_check.php';


        require 'classes/clientes.class.php';
        $c = new Clientes();

        if (!empty($_FILES['imagem_cliente']['tmp_name'])) {

            $carrossel = array();
            $extensao = explode('.', $_FILES['imagem_cliente']['name']);
            $extensao = $extensao[count($extensao)-1];
            $carrossel['imagem_cliente'] =  md5(time()).'.'.$extensao;
            move_uploaded_file($_FILES['imagem_cliente']['tmp_name'], '../assets/img/clientes/'.$carrossel['imagem_cliente']);

            $cDados = $c->cadastrar($carrossel);

            if ($cDados) {
                header('Location: clientes.php');
                exit;
            }

        }

?>

        <div class="admin-body">
            
            <?php include 'menu.php'; ?>

            <div class="area-formlario">
                
                <br><br><br>
                <form action="clientes_cadastrar.php" method="POST" enctype="multipart/form-data">

                    Imagem (logo do cliente) <br>
                    <input type="file" name="imagem_cliente" required> <br><br>
                    <br><br>

                    <input type="submit" value="Cadastrar" class="bt-enviar w-150">

                </form>

            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        
        