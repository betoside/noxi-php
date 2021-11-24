<?php
$config['title'] = 'NOXI - Contato';
$config['titleHeader'] = 'Contato';
$config['secao'] = 'contato';
$config['secaoHeader1'] = '';
$config['secaoHeader2'] = 'secao-contato';

include 'header.php';
?>

        </div>
    </header>

    <section class="geral">
        <div class="container">

            <h2 class="titulo-secao">fale com a noxi</h2>
            <div class="contato-conteudo">
                <p>
                    Entre em contato com a NOXI QUÍMICA utilizando o formulário abaixo, mas se preferir, faça uma ligação ou nos envie um e-mail. Seu contato é muito importante para nós, teremos o maior prazer em falar com você. 
                </p>
            </div>
            
            <div class="contato">
                <div class="formulario">

                    <div>
                        <input type="text" placeholder="*Nome:">
                    </div>
                    <div>
                        <input type="text" placeholder="*E-mail:">
                    </div>
                    <div class="tel-whats">
                        <div>
                            <input type="text" placeholder="Telefone:">
                        </div>
                        <div>
                            <input type="text" placeholder="Whatsapp:">
                        </div>
                    </div>
                    <div class="cidade-estado">
                        <div>
                            <input type="text" placeholder="Cidade:">
                        </div>
                        <div>
                            <input type="text" placeholder="Estado:">
                        </div>
                    </div>
                    <div>
                        <input type="text" placeholder="Empresa:">
                    </div>
                    <div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Mensagem:"></textarea>
                    </div>
                    <div class="bt-container">
                        <button class="bt-form">enviar</button>
                    </div>
                    
                </div>
                <div class="endereco">
                    <p>
                        <strong>Endereço:</strong>
                        <br>
                        Rua José Joaquim, 680
                        <br>
                        Tietê/SP • CEP: 18530-000
                    </p>
                    <div class="box-linha">
                        <div class="vertical"></div>
                    </div>
                    <p>
                        <strong>Telefones:</strong>
                        <br>
                        (15) 3282-4483
                        <br>
                        (15) 3282 4489
                    </p>
                    <p>
                        <strong>E-mail:</strong>
                        <br>
                        noxi@noxi.com.br
                    </p>
                </div>                
            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.171182803226!2d-47.72431588503796!3d-23.090828584918555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c61260f55b75c7%3A0x1c09e7a005857005!2sR.%20Jos%C3%A9%20Joaquim%2C%20680%2C%20Tiet%C3%AA%20-%20SP%2C%2018530-000!5e0!3m2!1sen!2sbr!4v1623697401283!5m2!1sen!2sbr" width="100%" height="570" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>