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

                <?php if ($_GET['toggle-all'] == 'on'): ?>
                    <input class="toggle-all toggle-all-checked" id="toggle-all" type="checkbox" value="off" />
                <?php else: ?>
                    <input class="toggle-all" id="toggle-all" type="checkbox" value="on" />
                <?php endif; ?>

                <label for="toggle-all">Mark all as complete</label>
                <form action="<?php echo $app->abs_url ?>/todo/selecionar.php" id="frm-selecionados" >
                    <ul class="todo-list">
                        <?php foreach ($todos as $key => $todo): ?>

                            <?php if ($key != $_GET['edit'] ) : ?>
                                <li class="<?php echo ($_SESSION['todos'][$key]['checked']) ? 'completed': '' ?>" >
                                    <div class="view">
                                        <input class="toggle" type="checkbox" name="todos[]"
                                               value="<?php echo $key ?>"
                                               <?php echo ($_SESSION['todos'][$key]['checked']) ? 'checked' : '' ?>
                                                >
                                        <label><a href="?edit=<?php echo $key ?>"><?php echo $todo['label'] ?></a></label>
                                        <a href="<?php echo $app->abs_url ?>/todo/del.php?id=<?php echo $key ?>" class="destroy"></a>
                                    </div>
                                </li>
                            <?php else : ?>
                                <li class="editing">
                                        <input type="text" class="edit"
                                               value="<?php echo $todo['label'] ?>"
                                               data-id="<?php echo $key ?>"
                                               id="txt-update"
                                               >
                                    </form>
                                </li>
                            <?php endif ?>

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
            var obj = document.getElementById('txt-adicionar');
            obj.onchange = function () {
                console.log('adicionar');
                window.location = '<?php echo $app->abs_url ?>/todo/add.php?todo-descricao=' + this.value;
            };

            // Evento de cada checkbox
            var checks = document.getElementsByName('todos[]');
            checks.forEach(function (obj) {
                obj.onclick = function () {
                    obj_form = document.getElementById('frm-selecionados');
                    obj_form.submit();
                };
            });

            // Evento da textobox quando em modo de edição
            var obj = document.getElementById('txt-update');
            if (obj) {
                obj.onchange = function (event) {
                    var id    = event.target.dataset.id;
                    var value = event.target.value;
                    window.location = '<?php echo $app->abs_url ?>/todo/update.php?id=' + id + '&descricao=' + value;
                };
            }

            var obj = document.getElementById('toggle-all');
            obj.onclick = function (event) {
                window.location = '?toggle-all=' + event.target.value;
            };
        </script>

    </body>
</html>
