<?php

# Função que ajuda a desenhar o controle HTML select
function combobox($arrDados, $valorSelecionado = null) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "<option value=\"$key\"  $selected>$value</option>";
    }
}

# Array com os dados de nossa combo
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa" => "Santo André",
    "sbc" => "São Bernardo do Campo"
);

$valor_selecionado = "sbc";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <?php combobox($arrCombo, $valor_selecionado); ?>
                </select>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>