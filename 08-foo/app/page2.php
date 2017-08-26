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
                <input class="new-todo" placeholder="What needs to be done?" autofocus="">
            </header>
            <section class="main" style="display: block;">
                <input class="toggle-all" id="toggle-all" type="checkbox">
                <label for="toggle-all">Mark all as complete</label>
                <ul class="todo-list"><li>
                        <div class="view">
                            <input class="toggle" type="checkbox">
                            <label>123</label>
                            <a href="#" class="destroy"></a>
                        </div>
                        <!--<input class="edit" value="123">-->
                    </li>
                </ul>
                <div>

                </div>
            </section>
            <footer class="footer" style="display: block;">
                <span class="todo-count"><strong>1</strong> item left</span>
                <ul class="filters">
                    <li>
                        <a href="#/">All</a>
                    </li>
                    <li>
                        <a class="selected" href="#/active">Active</a>
                    </li>
                    <li>
                        <a href="#/completed">Completed</a>
                    </li>
                </ul>
            </footer>
        </section>      

    </body>
</html>