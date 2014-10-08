<?php

# Array com os dados de nossa combo
$arrCombo = array (
    "scs" => "São Caetano do Sul",
    "sa" => "Santo André",
    "sbc" => "São Bernardo do Campo"
);

# Array com os os valores que devem ser selecionados
$valores_selecionados = array (
   "scs",
   "sbc"
);

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
                <select multiple name="cidades[]">
                    <?php foreach ($arrCombo as $key => $value): ?>
                        <?php $selected = (in_array($key, $valores_selecionados)) ? "selected=\"selected\"" : null; ?>
                        <?php echo "<option value=\"$key\"  $selected>$value</option>"; ?>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>