<?php

#
# controller default
#


#
# Inicializando variáveis
#
$_SESSION['state'] = (isset($_SESSION['state'])) ? $_SESSION['state'] : [] ;
if (!isset($_SESSION['state']['all-selected'])) {
    $_SESSION['state']['all-selected'] = true;
}
if (!isset($_SESSION['state']['view'])) {
    $_SESSION['state']['view'] = 'all';
}


#
# index/toggle-all
#
$app->get('/toggle-all', function ($request, $response, $args) {

    # toggle
    if (  $_SESSION['state']['all-selected']  ) {
        select_all();
        $_SESSION['state']['all-selected'] = false; # turn off
    } else {
        unselect_all();
        $_SESSION['state']['all-selected'] = true;  # turn on
    }

    return $response->withRedirect($request->getUri()->getBasePath());

});


#
# index, index/all, index/active, index/completed
#
$app->get('/[{param}]', function ($request, $response, $args) {
    $edit_id = null;

    # se for numérico, é o id do 'todo'...
    if (is_numeric($request->getAttribute('param'))) {
        $edit_id = $request->getAttribute('param');
    }
    # se não for numérico, deve ser o estado da visão
    else {
        $_SESSION['state']['view'] = $request->getAttribute('param') ? $request->getAttribute('param') : $_SESSION['state']['view'] ;
        //var_dump($_SESSION);
    }

    # view
    return $this->twig->render($response, 'index.html', [
        'state' => $_SESSION['state'],
        'todos' => get_todos($_SESSION['state']['view']),
        'sum_all'       => count(all()),
        'sum_actives'   => count(active()),
        'sum_completed' => count(completed()),
        'edit_id' => $edit_id
    ]);

});


#
# index/toggle/id
#
$app->get('/toggle/{id}', function ($request, $response, $args) {

    toggle($request->getAttribute('id'));
    return $response->withRedirect($request->getUri()->getBasePath());

});

#
# index/clear-completed/
#
$app->get('/clear-completed/', function ($request, $response, $args) {
    clear_completed();
    return $response->withRedirect($request->getUri()->getBasePath());
});