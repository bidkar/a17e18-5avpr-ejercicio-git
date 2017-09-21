<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

// $resultado = User::Create('gabriel','Gabriel','Vega','gabriel@mail','123');
// var_dump($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio - Prestamo de libros CETis108</title>
    <style>
        #login-form {
            width: 300px;
        }
    </style>
</head>
<body>
    <!-- Inicio formulario login -->
    <div id="login-form">
        <form action="#" id="loginform" method="post">
            <fieldset>
                <legend>Formulario de sesión</legend>
                <div>
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" id="">
                </div>
                <div>
                    <label for="passwd">Contraseña:</label>
                    <input type="password" name="passwd" id="">
                </div>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="submit">Iniciar sesión</button>
                <hr>
                <p>¿Aun no tienes una cuenta? <a href="#">Registrate aquí</a></p>
            </fieldset>
        </form>
    </div>
    <!-- Fin formulario login -->
</body>
</html>