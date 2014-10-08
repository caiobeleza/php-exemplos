<?php

$_POST['author'] = ( isset($_POST['author']) ) ? $_POST['author'] : null;
$_POST['email']  = ( isset($_POST['email']) )  ? $_POST['email']  : null;
$_POST['pass']   = ( isset($_POST['pass']) )   ? $_POST['pass']   : null;
$_POST['text']   = ( isset($_POST['text']) )   ? $_POST['text']   : null;

# Visualizando os dados
var_dump($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.
