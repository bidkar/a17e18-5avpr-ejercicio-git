<?php
require_once APP_VIEWS.'layout/master.tpl.php';
?>

<div class="container">
    <div class="card w-25">
        <div class="card-body">
            <h4 class="card-title mb-3 text-center">Inicio de sesión</h4>
            <hr>
            <form action="#" class="form" method="post" id="frmLogin">
                <div class="form-group">
                    <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Usuario">
                    <small class="form-text text-muted">Ingresa tu nombre de usuario</small>
                </div>
                <div class="form-group">
                    <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Contraseña">
                    <small class="form-text text-muted">Ingresa tu contraseña</small>
                </div>
                <div class="form-check">
                    <label class="form-check-label small">
                        <input type="checkbox" name="chkRemember" id="chkRemember" class="form-check-input">
                        Recordar inicio de sesión
                    </label>
                </div>
                <button type="submit" class="form-control btn btn-primary">Iniciar sesión</button>
                <hr>
                <div class="small">
                    <a href="<?= url('user/forgot'); ?>">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>
</div>