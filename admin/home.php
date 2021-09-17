<?php 
        $config['secao'] = 'home';
        include 'header.php';
        include 'session_check.php';

        require 'classes/carrossel.class.php';
        $c = new Carrossel();
        $cDados = $c->pegarCarrosseis();
        
        
        ?>


        <div class="admin-body">
            
            <?php include 'menu.php'; ?>

            <div class="area-formlario">

                <br><br>
                <a href="home_cadastrar.php" class="bt-enviar w-150">Cadastrar</a>
                <br>
                <br>
                <hr>

                <br><br>
                
                <div class="destaque-home-container">

                    <?php foreach($cDados as $item): ?>
                    <div class="destaque-home">
                        <div class="funcionalidades">
                            <a href="home_excluir.php?id=<?=$item['id'];?>" class="excluir">
                                <i class="fas fa-trash-alt"></i>
                                Excluir
                            </a>
                            <a href="home_editar.php?id=<?=$item['id'];?>" class="editar">
                                <i class="fas fa-edit"></i>
                                Editar
                            </a>
                        </div>
                        <strong>Banner</strong>: <br>                        
                        <img src="<?=$base;?>/assets/img/carrosselHome/<?=$item['imagem_banner'];?>" alt="">                        
                        <br><br>

                        <strong>Título</strong>: <br>
                        <?=$item['titulo'];?>
                        <br><br>

                        <strong>Link</strong>: <br>
                        <?=$item['link'];?>
                        <br><br>

                        <?php if (!empty($item['imagem_produto'])): ?>
                            imagem produto: <?=$item['imagem_produto'];?>
                            <br><br>
                        <?php endif; ?>


                    </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        
        
        
