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
