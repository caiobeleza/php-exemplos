<?php

require "../boot.php";

$todos = isset($_SESSION['todos']) ? $_SESSION['todos'] : [];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require $app->abs_path . "/app/_includes/header.php"; ?>
    </head>
    <body class="learn-bar">
        <?php require $app->abs_path . "/app/_includes/learn.php"; ?>        

        <section class="todoapp">
            <header class="header">
                <h1>todos</h1>
                <form action="<?php echo $app->abs_url . '/todo/add/' ?>" >
                    <input class="new-todo" placeholder="What needs to be done?" autofocus name="todo-descricao">
                    <input type="submit" value="adicionar"/>
                </form>
            </header>
            <section class="main">
                <label for="toggle-all">Mark all as complete</label>                
                <ul class="todo-list">
                    <?php foreach($todos as $todo): ?>
                        <li>
                            <div class="view">
                                <input class="toggle" type="checkbox">
                                <label><?php echo $todo ?></label>
                                <a href="#" class="destroy"></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>                        
            </section>
        </section>  

    </body>
</html>