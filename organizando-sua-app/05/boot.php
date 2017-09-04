<?php

require "vendor/autoload.php";

$loader = new Twig_Loader_Filesystem('../');
$twig   = new Twig_Environment($loader);