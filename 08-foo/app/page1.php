<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require "_includes/header.php"; ?>
    </head>
    <body class="learn-bar">
        <?php require "_includes/learn.php"; ?>        

        <section class="todoapp">
            <header class="header">
                <h1>todos</h1>
                <input class="new-todo" placeholder="What needs to be done?" autofocus>
            </header>
            <section class="main">
                <label for="toggle-all">Mark all as complete</label>
                <ul class="todo-list"></ul>
            </section>
        </section>  

    </body>
</html>