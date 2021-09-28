<?php
        $config['secao'] = 'clientes';
        include 'header.php';
        include 'session_check.php';

        require 'classes/clientes.class.php';
        $c = new Clientes();
        $cDados = $c->pegarClientes();
?>


        <div class="admin-body">
            
            <?php include 'menu.php'; ?>

            <div class="area-formlario">

                <h1>Clientes</h1>

                <br><br>
                <a href="clientes_cadastrar.php" class="bt-enviar w-150">Cadastrar</a>
                <br>
                <br>
                <hr>

                <br><br>

                <div class="lista-clientes">

                    <?php 
                    if ($cDados) {
                        foreach($cDados as $cliente): ?>

                            <div class="cliente">
                                <div class="funcionalidades">
                                    <a href="clientes_excluir.php?id=<?=$cliente['id'];?>&img=<?=$cliente['nome'];?>" class="excluir">
                                        <i class="fas fa-trash-alt"></i>
                                        Excluir
                                    </a>
                                </div>
                                <div class="brd"><img src="<?=$base;?>assets/img/clientes/<?=$cliente['nome'];?>" alt=""></div>
                            </div>

                        <?php endforeach;
                    } else {
                        echo "Não existe cliente cadastrado";
                    }
                    ?>

                </div>
            
                
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        
        
        