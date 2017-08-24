<?php

$content  = '';
$content .= '<div class="container">';
$content .= '<h1>Página 2</h1>';
$content .= '<p>este é o conteúdo da página 2</p>';
$content .= '</div>';

$menu_atual = basename(__FILE__);
require "layouts/base.php";

