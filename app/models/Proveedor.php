<?php
require_once __DIR__ . '/../core/Database.php';
//Esta clase permitira al Usuario administrador gestionar los proveedores de insumos
class Proveedor{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // VALIDAR CONSULTAS
    public function obtenerTodos() {
        $consulta = $this->db->query("SELECT * FROM proveedor ORDER BY created_at DESC");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    // ADECUAR CAMPOS TANTO EN EL FORMULARIO COMO EN LA CONSULTA SQL
    public function registrar($nombre, $contacto, $telefono, $email) {
        $consulta = $this->db->prepare("INSERT INTO proveedor (nombre, contacto, telefono, email) VALUES (?, ?, ?, ?)");
        return $consulta->execute([$nombre, $contacto, $telefono, $email]);
    }

    // UD
    public function obtenerPorId($id) {
        $consulta = $this->db->prepare("SELECT * FROM proveedor WHERE id = ?");
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    
    public function editar($id, $nombre, $contacto, $telefono, $email) {
        $consulta = $this->db->prepare("UPDATE proveedor SET nombre = ?, contacto = ?, telefono = ?, email = ? WHERE id = ?");
        return $consulta->execute([$nombre, $contacto, $telefono, $email, $id]);
    }
    
    public function eliminar($id) {
        $consulta = $this->db->prepare("DELETE FROM proveedor WHERE id = ?");
        return $consulta->execute([$id]);
    }
    
}

?>