<?php

require "boot.php";

echo $twig->render('page2.html', ['title' => 'Página 2', 'menu_atual' => basename(__FILE__)]);