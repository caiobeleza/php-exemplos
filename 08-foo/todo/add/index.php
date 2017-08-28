<?php

require "../../boot.php";

#
#
#
$_SESSION['todos'] = isset($_SESSION['todos']) ? $_SESSION['todos'] : [];

#
#
#
$id = count($_SESSION['todos']) + 1; 

#
#
#
if ($_GET['todo-descricao']) {
    $_SESSION['todos'][$id] = $_GET['todo-descricao']; 
}

# debug
//echo "Adicionar todo:<br>";
//var_dump($_GET);

#
#
#
$destino = "{$app->abs_url}/app/page1.php";
header("Location: $destino");
