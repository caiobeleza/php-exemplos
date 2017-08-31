<?php

#
# Este script é um prótipo de controller
#

require "../boot.php";

# model
require "page-model.php";

$_SESSION['todos'] = (isset($_SESSION['todos'])) ? $_SESSION['todos'] : [] ;

$_GET['edit'] = (isset($_GET['edit'])) ? $_GET['edit'] : null ;

$_GET['view'] = (isset($_GET['view'])) ? $_GET['view'] : 'all' ;

$_GET['toggle-all'] = (isset($_GET['toggle-all'])) ? $_GET['toggle-all'] : null ;

if ($_GET['toggle-all'] == 'on') {
    toggle_all('on');
} else if ($_GET['toggle-all'] == 'off') {
    toggle_all('off');
}


$todos = [];
switch ($_GET['view']) {
    case 'active':
        //var_dump('active');
        $todos = active();
        break;
    case 'completed':
        //var_dump('completed');
        $todos = completed();
        break;
    case 'all':
        //var_dump('all');
        $todos = all();
        break;
}
// var_dump($_GET); //die();


# view
$count_todos = count(active());
require 'page-view.php';
