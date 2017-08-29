<?php

require "../boot.php";

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
    $_SESSION['todos'][$id] = ['label' => $_GET['todo-descricao'], 'checked' => false];
}

# debug
//echo "Adicionar todo:<br>";
//var_dump($_GET);

#
#
#
$destino = "{$app->abs_url}/app/page-control.php";
header("Location: $destino");
