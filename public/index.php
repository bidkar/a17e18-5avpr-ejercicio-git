<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

// $usuario = new User();
// var_dump($usuario->FindById(1));
// 1: error en la consulta, 2: bool false, 3: object Models\User
$id = 10;
$resultado = User::FindById($id);
if ($resultado == false) {
    // imprimir que no encontro al usuario
    echo "El usuario con id=$id no fue encontrado.";
} else {
    // table>(thead>tr>th*5)+(tbody>tr>td*5)
?>
    <table>
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
            <tr>
                <td><?php echo $resultado->id; ?></td>
                <td><?php echo $resultado->name; ?></td>
                <td><?php echo $resultado->firstname; ?></td>
                <td><?php echo $resultado->lastname; ?></td>
                <td><?php echo $resultado->email; ?></td>
            </tr>
        </tbody>
    </table>
<?php
}
?>