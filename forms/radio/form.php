<?php
/**
 * Aqui teríamos algum código para
 * recuperar de uma fonte de dados
 * as informações do formulário.
 *
 * Utilizaremos o código abaixo, apenas como fins ilustrativo,
 * imaginando que ele vem de alguma fonte.
 */
$bandRock = "pink-floyd";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com radios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">

            <p>

                <input type="radio"
                       name="band-rock"
                       value="beatles"
                       <?php echo ($bandRock == "beatles") ? "checked" : null; ?>/>The Beatles


                <input type="radio"
                       name="band-rock"
                       value="led-zeppelin"
                       <?php echo ($bandRock == "led-zeppelin") ? "checked" : null; ?>/>Led Zeppelin


                <input type="radio"
                       name="band-rock"
                       value="pink-floyd"
                       <?php echo ($bandRock == "pink-floyd") ? "checked" : null; ?>/>Pink Floy
            </p>

            <p>
                <input type="submit" id="btnSubmit" value="Submit me!" />
            </p>

        </form>
    </body>
</html>