<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $greeting; ?></h1>

    <h2>Completas</h2>
    <ul>
        <?php foreach ($completedTasks as $task) : ?>
            <li style="color: <?= $task->color ?>;"><?= $task->title ?></li>
        <?php endforeach ?>
    </ul>

    <h2>Pendientes</h2>
    <ul>
        <?php foreach ($pendingTasks as $task) : ?>
            <li style="color: <?= $task->color ?>;"><?= $task->title ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>
