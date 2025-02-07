<?php
require_once __DIR__ . '/../core/Database.php';

class Cliente{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    //VALIDAR CAMPOS
    public function obtenerTodos() {
        $consulta = $this->db->query("SELECT * FROM cliente ORDER BY created_at DESC");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    //VALIDAR CAMPOS
    public function registrar($nombre, $email, $telefono, $direccion) {
        $consulta = $this->db->prepare("INSERT INTO cliente (nombre, email, telefono, direccion) VALUES (?, ?, ?, ?)");
        return $consulta->execute([$nombre, $email, $telefono, $direccion]);
    }

    // UD
    public function obtenerPorId($id) {
        $consulta = $this->db->prepare("SELECT * FROM cliente WHERE id = ?");
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    
    public function editar($id, $nombre, $email, $telefono, $direccion) {
        $consulta = $this->db->prepare("UPDATE cliente SET nombre = ?, email = ?, telefono = ?, direccion = ? WHERE id = ?");
        return $consulta->execute([$nombre, $email, $telefono, $direccion, $id]);
    }
    
    public function eliminar($id) {
        $consulta = $this->db->prepare("DELETE FROM cliente WHERE id = ?");
        return $consulta->execute([$id]);
    }
    
}

?>