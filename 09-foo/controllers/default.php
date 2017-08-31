<?php

#
# controller default
#


$app->get('/', function ($request, $response, $args) {

    return $this->twig->render($response, 'index.html', []);

});