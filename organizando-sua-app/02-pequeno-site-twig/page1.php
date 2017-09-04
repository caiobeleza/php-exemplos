<?php

require "boot.php";

echo $twig->render('page1.html', ['title' => 'Página 1', 'menu_atual' => basename(__FILE__)]);