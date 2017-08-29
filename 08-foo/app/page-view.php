<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require $app->abs_path . "/app/_includes/header.php"; ?>
    </head>
    <body class="learn-bar">
        <?php require $app->abs_path . "/app/_includes/learn.php"; ?>

        <section class="todoapp">
            <header class="header">
                <h1>todos</h1>
                <input class="new-todo" placeholder="What needs to be done?" autofocus name="todo-descricao" id="txt-adicionar">
            </header>
            <section class="main">
                <input class="toggle-all" id="toggle-all" type="checkbox">
                <label for="toggle-all">Mark all as complete</label>
                <form action="<?php echo $app->abs_url ?>/todo/selecionar.php" id="frm-selecionados" >
                    <ul class="todo-list">
                        <?php foreach ($todos as $key => $todo): ?>
                            <li class="<?php echo ($_SESSION['todos'][$key]['checked']) ? 'completed': '' ?>" >
                                <div class="view">
                                    <input class="toggle" type="checkbox" name="todos[]"
                                           value="<?php echo $key ?>"
                                           <?php echo ($_SESSION['todos'][$key]['checked']) ? 'checked' : '' ?>
                                    >
                                    <label><?php echo $todo['label'] ?></label>
                                    <a href="<?php echo $app->abs_url ?>/todo/del.php?id=<?php echo $key ?>" class="destroy"></a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </form>
            </section>
            <?php if ($count_todos): ?>
                <footer class="footer" style="display: block;">
                    <span class="todo-count"><strong><?php echo $count_todos ?> </strong> items left</span>
                    <ul class="filters">
                        <li> <a class="<?php echo ($_GET['view'] == 'all') ? 'selected' : '' ?>" href="?view=all">All</a> </li>
                        <li> <a class="<?php echo ($_GET['view'] == 'active') ? 'selected' : '' ?>" href="?view=active">Active</a> </li>
                        <li> <a class="<?php echo ($_GET['view'] == 'completed') ? 'selected' : '' ?>" href="?view=completed">Completed</a> </li>
                    </ul>
                    <?php if(isset($key)): ?>
                        <a href="<?php echo $app->abs_url ?>/todo/clear-completed.php?id=<?php echo $key ?>" class="clear-completed">Clear completed</a>
                    <?php endif ?>
                </footer>
            <?php endif ?>
        </section>

        <script type="text/javascript">

            // Evento onblur da textbox que faz a inserção do 'todo'
            obj = document.getElementById('txt-adicionar');
            obj.onchange = function () {
                console.log('adicionar');
                window.location = '<?php echo $app->abs_url ?>/todo/add.php?todo-descricao=' + this.value;

            };

            // Evento de cada checkbox
            checks = document.getElementsByName('todos[]');
            checks.forEach(function (obj) {
                //console.log(obj);
                obj.onclick = function () {
                    obj_form = document.getElementById('frm-selecionados');
                    obj_form.submit();
                };
            });
            //console.log(checks);

        </script>

    </body>
</html>
