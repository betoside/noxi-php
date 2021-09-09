<?php
session_start();
unset($_SESSION['noxiLogin']);
header('Location: login.php');