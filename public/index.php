<?php
require_once '../src/app/db/mysql.php';

$conexion = new App\DB\MySQL();
var_dump($conexion);


// $a = 10;
// echo 'valor de variable $a = '.$a;

// msyqli_connect(string $host, string $user, string $passwd, [string $dbname, [int $port, [$socket]]]);
// $conexion = mysqli_connect('127.0.0.1','root','toor','bibliotecav',3306);
// var_dump($conexion);

