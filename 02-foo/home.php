<?php

$content  = '';
$content .= '<div class="container">';
$content .= '<h1>Home</h1>';
$content .= '<p>este é o conteúdo da home</p>';
$content .= '</div>';

$menu_atual = basename(__FILE__);
require "layouts/base.php";

