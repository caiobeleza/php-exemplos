<?php

require "../boot.php";

echo $twig->render('modulo-home/home.html', ['title' => 'Home', 'menu_atual' => basename(__FILE__)]);