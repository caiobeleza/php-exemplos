<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        $page_name = "Page 1";
        require "inc-head.php"
        ?>
    </head>
    <body>
        <?php
        $menu_atual = basename(__FILE__);
        require "inc-nav.php";
        ?>

        <!-- desenvolva seu body aqui -->
        <div class="container">
            <h1><?php echo $page_name ?></h1>
            <p>este é o conteúdo da página 1</p>
        </div>

        <?php require "inc-footer.php" ?>
    </body>
</html>