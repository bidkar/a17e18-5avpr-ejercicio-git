<?php
namespace Models;
use App\DB\MySQL;

class User {
    private $data = 
        ['id'=>'',
        'name'=>'',
        'firstname'=>'',
        'lastname'=>'',
        'email'=>''];

    public function __get($var) {
        if (array_key_exists($var, $this->data))
            return $this->data[$var];
    }
    
    public function __set($var, $value) {
        if (array_key_exists($var, $this->data))
            $this->data[$var] = $value;
    }

    public static function FindById($id) {
        $cnn = new MySQL();
        $sql = sprintf("SELECT * FROM users WHERE id=%d",$id);
        $rst = $cnn->query($sql); // mysqli_result::fetch_assoc()
        $cnn->close(); // cerrar conexion a mysql
        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 0) {
            return false;
        } else {
            $r = $rst->fetch_assoc();
            $usuario = new User();
            $usuario->id = $r['id'];
            $usuario->name = $r['name'];
            $usuario->firstname = $r['firstname'];
            $usuario->lastname = $r['lastname'];
            $usuario->email = $r['email'];
            return $usuario;
        }
    }

    public static function All() {
        $cnn = new MySQL();
        $sql = "SELECT id,name,firstname,lastname,email FROM users";
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 0) {
            return false;
        } else {
            $usuarios = array();
            while ($r = $rst->fetch_assoc()) {
                $usuario = new User();
                $usuario->id = $r['id'];
                $usuario->name = $r['name'];
                $usuario->firstname = $r['firstname'];
                $usuario->lastname = $r['lastname'];
                $usuario->email = $r['email'];
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        }
    }
}