<?php

#
# Este script é um prótipo de controller
#

require "../boot.php";

# model
require "page-model.php";


$todos = [];

$_GET['edit'] = (isset($_GET['edit'])) ? $_GET['edit'] : null ;

$_GET['view'] = (isset($_GET['view'])) ? $_GET['view'] : 'all' ;

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
//var_dump($todos); die();


# view
$count_todos = count(active());
require 'page-view.php';
