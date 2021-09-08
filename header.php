
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$config['title'];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="assets/css/glider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="botao-topo">></div>
    <header class="<?=$config['secaoHeader1'];?>">
        <div class="container-fluid <?=$config['secaoHeader2'];?> secao-servicos<<<<<<">
            <div class="logo-menu">
                <div class="logo"><a href="index.php"><img src="assets/img/noxi.gif" alt="Noxi Química" /></a></div>
                <div class="menu--icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <nav class="main-nav">
                    <ul>
                        <li <?=($config['secao']=='home')?'class="active"':'';?>><a href="index.php">Home</a></li>                        
                        <li <?=($config['secao']=='empresa')?'class="active"':'';?>><a href="empresa.php">Sobre a Noxi</a></li>                        
                        <li <?=($config['secao']=='servicos')?'class="active"':'';?>><a href="servicos.php">Serviços</a></li>                        
                        <li <?=($config['secao']=='clientes')?'class="active"':'';?>><a href="clientes.php">Clientes</a></li>                        
                        <li <?=($config['secao']=='responsabilidades')?'class="active"':'';?>><a href="responsabilidades.php">Responsabilidades</a></li>                        
                        <li <?=($config['secao']=='blog')?'class="active"':'';?>><a href="blog.php">Blog</a></li>                        
                        <li <?=($config['secao']=='contato')?'class="active"':'';?>><a href="contato.php">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <?php if($config['secao'] != 'home'): ?>
            <h1><?=$config['titleHeader'];?></h1>
            <?php endif; ?>
        <!-- </div> -->
