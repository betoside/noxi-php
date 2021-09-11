
            <div class="menu">
                <nav class="main-nav">
                    <ul>
                        <li><a href="index.php"><img src="../assets/img/noxi-logo.gif" alt="" class="img-menu"></a></li>
                        <li <?=($config['secao']=='empresa')?'class="active"':'';?>><a href="empresa.php">Home</a></li>
                        <li <?=($config['secao']=='servicos')?'class="active"':'';?>><a href="servicos.php">Serviços</a></li>
                        <li <?=($config['secao']=='clientes')?'class="active"':'';?>><a href="clientes.php">Clientes</a></li>
                        <li <?=($config['secao']=='blog')?'class="active"':'';?>><a href="blog.php">Blog</a></li>
                        <li <?=($config['secao']=='user')?'class="active"':'';?>><a href="user.php">User</a></li>
                        <li><a href="sair.php">Sair</a></li>
                        <!-- 
                        • Usuario 

                            nome
                            email
                            senha


                        • Slider (home) - 
                        inserção, exclusão, ordenação dos banners e 
                        inserção de link para página interna (em cada banner);

                            foto
                            titulo
                            link
                            imagem
                        
                        • Blog (página) - 
                        inserção, exclusão e ordenação das notícias (texto/foto+ paginação);

                            titulo
                            corpo
                            data publicacao
                            data de ordenação
                        
                        • Clientes (página) - 
                        inserção, exclusão e ordenação dos logos.
                        
                        • Serviços - 
                        inserção, exclusão e ordenação das fotos de cada serviço 
                        (de 03 a 06 fotos para cada serviço com carrossel, 
                        semelhante as fotos institucionais, 
                        miniaturas + lightbox para cada foto).

                            titulo
                            descricao
                            item titulo
                            item descricao
                            foto
                        -->
                    </ul>
                </nav>
            </div>