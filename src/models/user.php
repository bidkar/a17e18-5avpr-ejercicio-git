<?php
namespace Src\Models;
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

    // CRUD - Create Read Update Delete
    public static function Create($name,$firstname,$lastname,$email,$password) {
        if (User::ValidateExistingUser($name, $email)) {
            return 'Usuario o email existente';
        } else {
            $cnn = new MySQL();
            $sql = "INSERT INTO users (name,firstname,lastname,email,password) VALUES ";
            $sql.= sprintf("('%s','%s','%s','%s',sha('%s'))",$name,$firstname,$lastname,$email,$password);
            $rst = $cnn->query($sql);
            $cnn->close();

            return $rst;
        }
    }

    private static function ValidateExistingUser($name, $email) {
        $cnn = new MySQL();
        $sql = sprintf("SELECT id FROM users WHERE name='%s' OR email='%s'", $name, $email);
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function Login($name,$passwd) {
        $cnn = new MySQL();
        $sql = sprintf("SELECT * FROM users WHERE name='%s' AND password=sha('%s')",$name, $passwd);
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

    public static function Delete($id) {
        $cnn = new MySQL();
        $sql = sprintf("DELETE FROM users where id=%d",$id);
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die("Error en la consulta: $sql");
        } else {
            return $rst;
        }
    }

    public function Update() {
        $cnn = new MySQL();
        $sql = sprintf("UPDATE users SET firstname='%s', lastname='%s' WHERE id=%d",$this->firstname, $this->lastname, $this->id);
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die("Error en la consulta: $sql");
        } else {
            return $rst;
        }
    }

    public function ChangePassword($password) {
        $cnn = new MySQL();
        $sql = sprintf("UPDATE users SET password=sha('%s') WHERE id=%d",$password, $this->id);
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die("Error en la consulta: $sql");
        } else {
            return $rst;
        }
    }
}