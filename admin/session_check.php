<?php 

if (!isset($_SESSION['noxiLogin']) && empty($_SESSION['noxiLogin'])) {
    header('Location: login.php');
    exit;
}