<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="home.php#">Home</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php
        $menus = [
          'page1.php' => 'Page 1',
          'page2.php' => 'Page 2',
          'page3.php' => 'Page 3'
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
