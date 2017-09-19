<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

// $id = 1;
// $resultado = User::FindById($id);

$resultado = User::All();
var_dump($resultado);

if ($resultado == false) {
    echo "El usuario con id=$id no fue encontrado.";
} else {
?>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $usuario) {
                echo
                "<tr>".
                    "<td>$usuario->id</td>".
                    "<td>$usuario->name</td>".
                    "<td>$usuario->firstname</td>".
                    "<td>$usuario->lastname</td>".
                    "<td>$usuario->email</td>".
                "</tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}
?>