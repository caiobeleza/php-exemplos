<?php

$content  = '';
$content .= '<div class="container">';
$content .= '<h1>Página 1</h1>';
$content .= '<p>este é o conteúdo da página 1</p>';
$content .= '</div>';

$menu_atual = basename(__FILE__);
require "layouts/base.php";

