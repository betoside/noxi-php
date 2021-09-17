<?php
session_start(); // a primeira a ser feita antes de qualquer dado ser impresso na tela

global $pdo;

try {
    $pdo = new PDO('mysql:dbname=noxi;host=localhost', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}
$base = 'http://localhost:8888/noxi/';