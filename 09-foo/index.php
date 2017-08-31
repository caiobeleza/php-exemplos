<?php

#
# Start Slim
#


#
# boot
#
require "boot.php";


#
# settings to slim
#
$settings =  array(
    'settings' => [
        'displayErrorDetails'    => $debug,
        'addContentLengthHeader' => false,
    ]
);


#
# Slim App
#
$app = new \Slim\App($settings);


#
# Twig (template)
#
require  "twig.php";


#
# Controllers
#
require 'controllers/default.php';
require 'controllers/design.php';

$app->run();