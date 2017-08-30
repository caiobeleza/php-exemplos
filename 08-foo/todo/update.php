<?php

require "../boot.php";

#
# inicializando a variável
#
$id = isset($_GET['id']) ? $_GET['id'] : null;
$descricao = isset($_GET['descricao']) ? $_GET['descricao'] : null;

# chegou o id ?
if ($id) {

    #
    # atualizar
    #
    $todo = $_SESSION['todos'][$id];
    $todo['label'] = $descricao;
    $_SESSION['todos'][$id] = $todo;
}


#
#
#
$destino = "{$app->abs_url}/app/page-control.php";
header("Location: $destino");
