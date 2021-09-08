
    <footer>
        <div class="container-fluid">
            <div class="logo">
                <img src="assets/img/noxi-quimica.gif" alt="NOXI Química">
            </div>
            <ul class="nav-footer">
                <li <?=($config['secao']=='home')?'class="active"':'';?>><a href="index.php">Home</a></li>                        
                <li <?=($config['secao']=='empresa')?'class="active"':'';?>><a href="empresa.php">Sobre a Noxi</a></li>                        
                <li <?=($config['secao']=='servicos')?'class="active"':'';?>><a href="servicos.php">Serviços</a></li>                        
                <li <?=($config['secao']=='clientes')?'class="active"':'';?>><a href="clientes.php">Clientes</a></li>                        
                <li <?=($config['secao']=='responsabilidades')?'class="active"':'';?>><a href="responsabilidades.php">Responsabilidades</a></li>                        
                <li <?=($config['secao']=='blog')?'class="active"':'';?>><a href="blog.php">Blog</a></li>                        
                <li <?=($config['secao']=='contato')?'class="active"':'';?>><a href="contato.php">Contato</a></li>
            </ul>
            <div class="endereco">
                Rua José Joaquim, 680 • Tietê/SP • CEP: 18530-000
                <br>
                Telefone: (15) 3282-4483/3282 4489
            </div>
            <div class="email">
                noxi@noxi.com.br
                <!-- <br>
                <a href="mailto:noxi@noxi.com.br">noxi@noxi.com.br</a> -->
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="assets/js/glider.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>