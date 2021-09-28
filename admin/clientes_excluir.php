<?php
require '../config.php';
include 'session_check.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = addslashes($_GET['id']);

    require 'classes/clientes.class.php';
    $c = new Clientes();
    $exclusao = $c->excluir($id);

}

header('Location: clientes.php');
exit;
