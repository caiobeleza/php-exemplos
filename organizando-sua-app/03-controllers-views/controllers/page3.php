<?php

require "../boot.php";

echo $twig->render('page3.html', ['title' => 'Página 3', 'menu_atual' => basename(__FILE__)]);