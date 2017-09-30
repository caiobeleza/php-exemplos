<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        $page_name = "Home";
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
            <h1>Bootstrap starter template</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
          </div>
        </div>

        <?php require "inc-footer.php" ?>
    </body>
</html>