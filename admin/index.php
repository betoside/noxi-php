        <?php 
        $config['secao'] = '';
        include 'header.php';
        include 'session_check.php';
        ?>
        
        <div class="admin-body">

            <?php include 'menu.php'; ?>

            <div class="area-formlario">
                <br><br>
                <h1>Seja bem-vindo</h1>
                <?php
                // print_r($_SESSION['noxiLogin']);
                ?>
            </div>

        </div>
        
        <?php include 'footer.php'; ?>