        
        <?php 
        include 'header.php'; 

        require 'classes/usuario.class.php';
        $u = new Usuarios();
        if (isset($_POST['email']) && !empty($_POST['email'])) {

            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            if($u->login($email, $senha)) {
                header('Location: index.php');
                exit;
            } else {
                $erro = 'Usuário e/ou senha errados';
            }

        }
        if (isset($_POST['email']) && empty($_POST['email'])) {
            $alerta = 1;
        }
        ?>
        
        <div class="login-form">

        <?php if(isset($erro) && !empty($erro)): ?>
            <div class="alert alert-danger">
                Usuário e/ou senha errados
            </div>
            <?php endif; ?>
            <?php if(isset($alerta) && !empty($alerta)): ?>
            <div class="alert alert-warning" role="alert">
                :)
            </div>
            <?php endif; ?>

            <form action="" method="post">
                Email <br>
                <input type="email" name="email"> <br><br>

                Senha <br>
                <input type="password" name="senha"> <br><br>

                <button>Acessar</button>
            </form>
            <!-- <a href="esqueceu-senha.php">Esqueceu a senha?</a> -->
        </div>
        
        <?php include 'footer.php'; ?>