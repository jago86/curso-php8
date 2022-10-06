<?php require('partials/head.view.php') ?>

<h1>Iniciar sesión</h1>

<form action="/login" method="POST">
    <div>
        <input style="margin-top: 10px;" type="text" name="email" placeholder="Nombre de usuario">
    </div>
    <div>
        <input style="margin-top: 10px;" type="password" name="password" placeholder="Contraseña">
    </div>
    <div>
        <button style="margin-top: 10px;" type="submit">Entrar</button>
    </div>
</form>

<?php require('partials/footer.view.php') ?>
