<?php

require "../boot.php";

echo $twig->render('/modulo2/_index.html', ['title' => 'Página 2', 'menu_atual' => basename(__DIR__)]);