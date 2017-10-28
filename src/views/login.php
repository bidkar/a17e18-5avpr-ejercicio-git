<?php
require_once 'master.tpl.php';
?>

<div class="container">
    <!-- form#frmLogin.form[method=post action=#] -->
    <form action="#" class="form" method="post" id="frmLogin">
        <label for="txtUsername">Usuario</label>
        <input type="text" name="txtUsername" id="txtUsername">
        <label for="txtPassword">Contraseña</label>
        <input type="password" name="txtPassword" id="txtPassword">
        <button type="submit">Iniciar sesión</button>
    </form>
</div>