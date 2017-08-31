<?php

#
# controller /design
#
$app->group('/design', function () {

    $this->get('/', function ($request, $response, $args) {
        return $this->twig->render($response, 'design-index.html', []);
    });

    $this->get('/example-1', function ($request, $response, $args) {
        return $this->twig->render($response, 'design-example-1.html', []);
    });

    $this->get('/example-2', function ($request, $response, $args) {
        return $this->twig->render($response, 'design-example-2.html', []);
    });

    $this->get('/example-3', function ($request, $response, $args) {
        return $this->twig->render($response, 'design-example-3.html', []);
    });

    $this->get('/example-4', function ($request, $response, $args) {
        return $this->twig->render($response, 'design-example-4.html', []);
    });

    $this->get('/example-5', function ($request, $response, $args) {
        return $this->twig->render($response, 'design-example-5.html', []);
    });

});