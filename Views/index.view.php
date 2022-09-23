<?php require('partials/head.view.php') ?>

    <h1><?= $greeting; ?></h1>

    <h2>Completas</h2>
    <ul>
        <?php foreach ($completedTasks as $task) : ?>
            <li style="color: <?= $task->color ?>;">
                <?= $task->title ?>
                <form style="display: inline;" action="tasks/toggle" method="POST">
                    <input type="hidden" name="completed" value="0">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">➖</button>
                </form>

                <form onsubmit="return confirm('¿Estás seguro de eliminar el registro?');" style="display: inline;" action="tasks/delete" method="POST">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">❌</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

    <h2>Pendientes</h2>
    <ul>
        <?php foreach ($pendingTasks as $task) : ?>
            <li style="color: <?= $task->color ?>;">
                <?= $task->title ?>
                <form style="display: inline;" action="tasks/toggle" method="POST">
                    <input type="hidden" name="completed" value="1">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">✅</button>
                </form>

                <form onsubmit="return confirm('¿Estás seguro de eliminar el registro?');" style="display: inline;" action="tasks/delete" method="POST">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <button type="submit">❌</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

    <form action="tasks/create" method="POST">
        <input type="text" name="title">
        <input type="color" name="color">
        <button type="submit">Guardar</button>
    </form>
<?php require('partials/footer.view.php') ?>

