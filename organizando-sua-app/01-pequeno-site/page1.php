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
          <div class="starter-template">
            <h1>Page 1</h1>
            <p class="lead">Content 1</p>
          </div>
        </div>

        <?php require "inc-footer.php" ?>
    </body>
</html>