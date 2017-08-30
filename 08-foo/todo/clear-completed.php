<?php

require "../boot.php";


foreach($_SESSION['todos'] as $key => $todo) {
    if ($todo['checked']) {
        unset($_SESSION['todos'][$key]);
    }
}
    
//# debug
//var_dump($_SESSION); die();

#
#
#
$destino = "{$app->abs_url}/app/page-control.php";
header("Location: $destino");