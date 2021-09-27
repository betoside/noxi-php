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
                                <div class="brd"><img src="<?=$base;?>assets/img/clientes/<?=$cliente['nome'];?>" alt=""></div>
                            </div>

                            <!-- 

                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-arcelor.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-braskem.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-camargocorrea.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-csn.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-emerson.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-enesa.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-gerdau.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-goodyear.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-odebrecht.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-petrobras.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-usiminas.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-vale.png" alt=""></div>
                            </div>
                            <div class="cliente">
                                <div class="brd"><img src="<?=$base;?>assets/img/cliente-whitemartins.png" alt=""></div>
                            </div>
                             -->


                        <?php endforeach;
                    } else {
                        echo "Não existe cliente cadastrado";
                    }
                    ?>

                </div>
            
                
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        
        
        