<?php

require "../boot.php";


#
# inicializando a variável
#
$id = isset($_GET['id']) ? $_GET['id'] : null;

# chegou o id ?
if ($id) {

    #
    # deletar
    #
    unset($_SESSION['todos'][$id]);
}

//# debug
//echo "Deletar:<br>";
//var_dump($_GET);
//echo "Selecionados:<br>";
//var_dump($_SESSION);
//die();

#
#
#
$destino = "{$app->abs_url}/app/page-control.php";
header("Location: $destino");