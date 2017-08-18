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
        <h1>Page 1</h1>
        <p class="lead">Content 1</p>
      </div>
    </div>

    <?php require "_includes/footer.php"; ?>

  </body>
</html>