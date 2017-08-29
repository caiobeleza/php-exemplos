<?php

require "../boot.php";


# desmarcar todos os 'todos'
foreach($_SESSION['todos'] as $key => $todo) {
    $_SESSION['todos'][$key]['checked'] = false;
}

# selecionar os indicados
foreach($_GET['todos'] as $id) {
    $_SESSION['todos'][$id]['checked'] = true;
}

//# debug
//echo "Selecionar:<br>";
//var_dump($_GET);
//echo "Selecionados:<br>";
//var_dump($_SESSION);
//die();

#
#
#
$destino = "{$app->abs_url}/app/page-control.php";
header("Location: $destino");