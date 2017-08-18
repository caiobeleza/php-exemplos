<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require "_includes/header.php"; ?>
  </head>

  <body>
    <?php
    $menu_atual = basename(__FILE__); 
    require "_includes/nav.php";
    ?>

    <div class="container">
      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
    </div>

    <?php require "_includes/footer.php"; ?>

  </body>
</html>