<?php

require "boot.php";

echo $twig->render('home.html', ['title' => 'Home', 'menu_atual' => basename(__FILE__)]);