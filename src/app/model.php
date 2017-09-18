<?php
namespace App;
use App\DB\MySQL;

class Model {
    // CRUD - Create Read Update Delete
    private $table;
    function getTable() {
        return $this->table;
    }
    function setTable($value) {
        $this->table = $value;
    }
    private $fields = [];
    private $hidden = [];

    function find(int $id) {
        // abrir una conexion al servidor
        $cnn = new MySQL();
        // definir la consulta
        $sql = sprintf("SELECT * FROM %s WHERE id=%d",$this->table,$id);
        // ejecutar la consulta
        $rst = $cnn->query($sql);
        // evaluar los resultados
        /* mysqli::query()
         * Retorna FALSE en caso de error. Si una consulta del tipo
         * SELECT, SHOW, DESCRIBE o EXPLAIN es exitosa, mysqli_query()
         * retornará un objeto mysqli_result. Para otras consultas
         * exitosas de mysqli_query() retornará TRUE.
         */
        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 0) {
            return false;
        } else {
            return $rst->fetch_assoc();
        }
    }

    function select(string $query, $params = []) {}
    function delete(int $id) {}
    function update(int $id, $params = []) {}
    function insert($params = []) {}
    function all() {}
    function where(string $field, string $op, $value) {}
    function y(string $field, string $op, $value) {}
    function group($fields = []) {}
    
}