<?php

require "../boot.php";

echo $twig->render('/modulo3/_index.html', ['title' => 'Página 3', 'menu_atual' => basename(__DIR__)]);