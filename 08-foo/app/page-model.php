<?php

#
# Retorna o total de 'todos'
#
function count_todos($todos = []) {
    return count($todos);
}

#
# Retorna
#
function all() {
    return isset($_SESSION['todos']) ? $_SESSION['todos'] : [];
}

#
#
#
function active() {
    $active = [];
    foreach($_SESSION['todos'] as $key => $todo) {
        if (!$todo['checked']) {
            $active[$key] = $todo;
        }
    }
    return $active;
}

#
#
#
function completed() {
    $completed = [];
    foreach($_SESSION['todos'] as $key => $todo) {
        if ($todo['checked']) {
            $completed[$key] = $todo;
        }
    }
    return $completed;
}

#
#
#
function selecionar_todos() {
    foreach($_SESSION['todos'] as $key => $todo) {
        $_SESSION['todos'][$key]['checked'] = true;
    }
    return true;
}
