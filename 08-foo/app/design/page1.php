<?php require "../../boot.php"; ?>
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
                <input class="new-todo" placeholder="What needs to be done?" autofocus>
            </header>
            <section class="main"></section>
            </section>

    </body>
</html>