<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

    <?php
      $menus = [
        'home.php'  => 'Home',
        'page1.php' => 'Page 1',
        'page2.php' => 'Page 2'
      ];
    ?>

    <?php foreach($menus as $key => $value): ?>
        <li class="nav-item <?php echo ($menu_atual == $key) ? 'active' : '' ?>">
          <a class="nav-link" href="<?php echo $key ?>"><?php echo $value ?></a>
        </li>
    <?php endforeach; ?>

    </ul>
  </div>
</nav>