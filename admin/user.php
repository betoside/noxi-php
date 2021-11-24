<?php 
        $config['secao'] = 'user';
        include 'header.php';
        include 'session_check.php';

        require 'classes/usuario.class.php';
        $u = new Usuarios();
        $uDados = $u->getUser($_SESSION['noxiLogin']);
        // echo '<pre>';
        // print_r($uDados);
        // exit;

        if (isset($_POST['email']) && !empty($_POST['email'])) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            if (isset($_POST['senha']) && !empty($_POST['senha'])) {
                $senha = md5($_POST['senha']);
            } else {
                $senha = '';
            }
            
            if ($u->editar($_SESSION['noxiLogin'], $nome, $email, $senha)) {
                $uDados = $u->getUser($_SESSION['noxiLogin']);
                $sucesso = true;
            } else {
                $erro = true;
            }

        }
        if (isset($_POST['email']) && empty($_POST['email'])) {
            $alerta = 1;
        }
        ?>


        <div class="admin-body">
            
            <?php include 'menu.php'; ?>

            <div class="area-formlario">

                <div class="login-form">

                    <?php if(isset($sucesso) && !empty($sucesso)): ?>
                    <br>
                    <div class="alert alert-success">
                        Dados atualizados com sucesso
                    </div>
                    <?php 
                    endif;
                    if(isset($erro) && !empty($erro)): ?>
                    <br>
                    <div class="alert alert-danger">
                        Algum erro aconteceu ou nada mudou, ;)
                    </div>

                    <?php 
                    endif;
                    if(isset($alerta) && !empty($alerta)): ?>
                    <div class="alert alert-warning" role="alert">
                        :)
                    </div>
                    <?php endif; ?>

                    <form action="" method="post">
                        <?//=$uDados['id'];?>
                        Nome <br>
                        <input type="text" name="nome" value="<?=$uDados['nome'];?>"> <br><br>

                        Email <br>
                        <input type="email" name="email" value="<?=$uDados['email'];?>"> <br><br>

                        Senha <br>
                        <input type="text" name="senha"> <br><br>

                        <input class="bt-enviar" type="submit" value="Salvar" onclick="confirm('Confirme se deseja alterar as infos do User')">
                    </form>
                </div>
                
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        
        
        
