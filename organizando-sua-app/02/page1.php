<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        $page_name = "Page 1";
        require __DIR__ . "/includes/head.php"
        ?>
    </head>
    <body>
        <?php
        $menu_atual = basename(__FILE__);
        require "includes/nav.php";
        ?>

        <div class="container">
            <h1>Página 1</h1>
            <p>este é o conteúdo da página 1</p>
        </div>

        <?php require __DIR__ . "/includes/footer.php" ?>
    </body>
</html>