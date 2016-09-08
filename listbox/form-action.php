<?php
# Inicializando a variável $_POST['cidades']
$_POST['cidades'] = isset($_POST['cidades']) ? $_POST['cidades'] : null;

# Se tivermos a variável...
if ($_POST['cidades']) {

    foreach ($_POST['cidades'] as $cadaCidade) {
        echo "armazenar '$cadaCidade' </br>";
    }

} else {

    echo "usuário não escolheu nada ('null')";

}