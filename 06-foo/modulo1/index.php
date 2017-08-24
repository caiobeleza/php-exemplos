<?php

require "../boot.php";

echo $twig->render('/modulo1/_index.html', ['title' => 'Página 1', 'menu_atual' => basename(__DIR__)]);