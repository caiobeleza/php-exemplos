<?php
/**
 * Aqui teríamos algum código para
 * recuperar de uma fonte de dados
 * as informações do formulário.
 *
 * Utilizaremos o código abaixo, apenas como fins ilustrativo,
 * imaginando que ele vem de alguma fonte.
 */
$author = "Tom Jobim";
$email = "tom@jobim.com";
$pass = "1234";
$text = "algum texto";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="theme.css"></link>
        <title>Simple Form</title>
    </head>
    <body>
        <form id="comments_form" action="form-action.php" method="post">
            <fieldset>
                <legend>Your Contact Details</legend>
                <p>
                    <label for="author">Name: <em class="required">(Required)</em></label>
                    <input name="author" id="author" type="text" value="<?php echo $author; ?>" />
                </p>

                <p>
                    <label for="email">Email Address:</label>
                    <input name="email" id="email" type="text" value="<?php echo $email; ?>" />
                </p>

                <p>
                    <label for="pass">Password:</label>
                    <input name="pass" id="pass" type="password" value="<?php echo $pass; ?>" />
                </p>
            </fieldset>

            <fieldset>
                <legend>Comments</legend>
                <p>
                    <label for="text">Message: <em class="required">(Required)</em></label>
                    <textarea name="text" id="text" cols="20" rows="10"><?php echo $text; ?></textarea>
                </p>
            </fieldset>

            <p>
              <input type="submit" value="Submit!" />
            </p>

        </form>
    </body>
</html>