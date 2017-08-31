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
function toggle_all($onoff) {
    foreach($_SESSION['todos'] as $key => $todo) {
        if ($onoff == 'on') {
            $_SESSION['todos'][$key]['checked'] = true;
        } else {
            $_SESSION['todos'][$key]['checked'] = false;
        }
    }
    return true;
}
